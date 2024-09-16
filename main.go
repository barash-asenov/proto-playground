package main

import (
	"fmt"
	"log"
	"os"

	"protobuf-playground/protos/pbs/addressbookv1bp"
	"protobuf-playground/protos/pbs/addressbookv2bp"

	"google.golang.org/protobuf/proto"
)

func main() {
	fmt.Println("hey there")

	phonev1 := addressbookv2bp.PhoneNumber{
		Number: "01234 1234",
		Type:   addressbookv2bp.PhoneType_PHONE_TYPE_WORK,
	}

	rawProto, err := proto.Marshal(&phonev1)
	if err != nil {
		log.Fatalf("Failed to marshal: %v", err)
	}

	err = os.WriteFile("phone.pb", rawProto, 0o644)
	if err != nil {
		log.Fatalf("Failed to write: %v", err)
	}

	phonev2 := &addressbookv1bp.PhoneNumber{}
	err = proto.Unmarshal(rawProto, phonev2)
	if err != nil {
		log.Fatalf("Failed to unmarshal: %v", err)
	}

	log.Printf("Phone V2: %+v", phonev2)
}
