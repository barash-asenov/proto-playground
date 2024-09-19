gen_proto: gen_go_proto gen_php_proto

gen_go_proto:
	protoc -I=./protos --go_out=go/ ./protos/addressbookv1.proto
	protoc -I=./protos --go_out=go/ ./protos/addressbookv2.proto

gen_php_proto:
	protoc -I=./protos --php_out=php/src ./protos/addressbookv1.proto
	protoc -I=./protos --php_out=php/src ./protos/addressbookv2.proto

run_scripts_in_order: run_go_script run_php_script

run_go_script:
	cd go && go run .

run_php_script:
	docker run --volume ./php:/app composer install
	docker run --volume ./php:/app --volume ./data:/data composer ./src/Script.php
