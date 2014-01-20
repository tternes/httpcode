<?php

error_reporting(E_ALL); 
ini_set("display_errors", 1);

require_once 'limonade/lib/limonade.php';
require_once './pages/limonade_routes.php';

dispatch('/', 'hello');
function hello()
{
	return html("home.php");
}

dispatch('/about', 'about');
function about()
{
	// TODO: proper about page
	header("Location: http://th.adde.us/2013/08/http-status-codes/");
	// header("Location: /");
    return '';
}

dispatch('/go', 'redirectToStatusCode');
function redirectToStatusCode()
{
	$statusCode = $_GET['code'];
	header("Location: /" . $statusCode);
}

dispatch('/:status', 'renderHtmlStatusCode');
function renderHtmlStatusCode()
{
	global $pages;
	$statusCode = params('status');
	$format = 'html'; // curl | html, see parse.php for generated formats

	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$command_line_agents = array(
		"curl" => 'curl',
		"Wget" => 'curl',
		"HTTP Client" => 'curl',
		"HTTP%20Client" => 'curl'
	);

	//print("agent: " . $user_agent . "\n");
	foreach($command_line_agents as $agent => $agent_format)
	{
		//print("checking " . $agent . "\n");
		if(strpos($user_agent, $agent) === FALSE)
			continue;
		else
		{
			$format = $agent_format;
			break;
		}
	}
	
	if(in_array($statusCode, $pages))
	{
		// Valid - render
		$templateName = sprintf("%d.%s.php", $statusCode, $format);
		// return $templateName;
		return html($templateName);
	}
	else
	{
		// Invalid - error
		return html("notfound.php");
	}

}

// Configuration
function configure()
{
    option('signature', false);
    option('session', false);
    option('base_uri', '/');
	option('debug', true);
	option('views_dir', dirname(__FILE__).'/pages');
}

error(NOT_FOUND, 'my_not_found');
error(SERVER_ERROR, 'my_server_error');
error(E_USER_WARNING, 'my_notices');
error(E_NOTICE, 'my_notice');

function my_notices($errno, $errstr, $errfile, $errline)
{
    status(SERVER_ERROR);
    return html('<h1>Server Error</h1>');
}

function my_not_found($errno, $errstr, $errfile, $errline)
{
    // TODO: serve custom 404
	return html('<h1>Not Found</h1>');
}

function my_server_error($errno, $errstr, $errfile, $errline)
{
	// TODO: server error page
	return html('<h1>$errno</h1>');
}

function my_notice($errno, $errstr, $errfile, $errline)
{
	// TODO: server error page
	return html('<h1>my_notice</h1>');
}

run();
