#!/bin/bash

PHP_PORT=5309
CURL_MAX_LENGTH=50

###################################
exit_if_failed()
{
	echo "------------------------ TEST FAILED ------------------------"
	echo caught error in command: ${previous_command}
	echo "-------------------------------------------------------------"
	exit 1
}

exit_with_error()
{
	echo "------------------------ TEST FAILED ------------------------"
	echo error: $*
	echo "-------------------------------------------------------------"
	exit 1
}

###################################
graceful_shutdown()
{
	echo Shutdown webserver ${PHP_PID}
	kill -SIGTERM $PHP_PID

    echo Cleanup test files
	for f in *.test; do
		rm $f
	done
}

###################################
trap exit_if_failed ERR 
trap graceful_shutdown EXIT
trap 'previous_command=$this_command; this_command=$BASH_COMMAND' DEBUG

###################################
# Start the embedded webserver
php -S localhost:${PHP_PORT} -t web &
export PHP_PID=$!

# pause and wait for the server to start :trollface:
sleep 1

###################################
STATUS_LIST="100 101 200 201 202 203 204 205 206 207"
STATUS_LIST="${STATUS_LIST} 300 301 302 303 304 305 306 307"
STATUS_LIST="${STATUS_LIST} 400 401 402 403 404 405 406 407 408 409 410 411 412 413 414 415 416 417 418 422 423 424"
STATUS_LIST="${STATUS_LIST} 500 501 502 503 504 505 507"
for status in ${STATUS_LIST} 
do
	echo "-------------------------------------------------------------"
	echo checking ${status}

	#
	# plain text (curl) pages
	# curl pages should be less than 20 lines
	curl -o - -s http://localhost:${PHP_PORT}/${status} | grep html | wc -l
	CURL_LINES=`curl -o - -s http://localhost:${PHP_PORT}/${status} | wc -l`
	echo ${CURL_LINES}
	if [ $CURL_LINES -gt ${CURL_MAX_LENGTH} ]; then
		exit_with_error ${status} curl response was too large
	fi

	#
	# specify a content type - agent should be ignored
	#curl -o - -s -A "Mozilla/4.0" http://localhost:${PHP_PORT}/${status} | grep html

	#
	# browser requests - should validate as html document
	OUTPUT=`uuidgen`.test
	echo CURL to ${OUTPUT}
	curl -o $OUTPUT -s -A "Mozilla/4.0" http://localhost:${PHP_PORT}/${status}
	echo XMLLINT ${OUTPUT}
	xmllint -html -noout ${OUTPUT}

done

echo "----------------------- TEST COMPLETE -----------------------"
