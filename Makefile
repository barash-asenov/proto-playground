gen_proto: gen_go_proto gen_php_proto

gen_go_proto:
	protoc -I=./protos --go_out=go/ ./protos/addressbookv1.proto
	protoc -I=./protos --go_out=go/ ./protos/addressbookv2.proto

gen_php_proto:
	protoc -I=./protos --php_out=php/src ./protos/addressbookv1.proto
	protoc -I=./protos --php_out=php/src ./protos/addressbookv2.proto

run_php_script:
	docker run --volume ./php:/app --volume ./data:/data composer ./src/Script.php
