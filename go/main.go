package main

import (
	"fmt"
	"log"
	"math"
	"os"
	"path/filepath"

	"protobuf-playground/protos/pbs/addressbookv1bp"
	"protobuf-playground/protos/pbs/addressbookv2bp"

	"google.golang.org/protobuf/proto"
)

const dataDir = "../data"

func main() {
	fmt.Println("hey there")

	phonev1 := addressbookv1bp.PhoneNumber{
		Number: math.MaxInt32 + 1,
		Type:   addressbookv1bp.PhoneType_PHONE_TYPE_HOME,
	}

	rawProto, err := proto.Marshal(&phonev1)
	if err != nil {
		log.Fatalf("Failed to marshal: %v", err)
	}

	fileToWrite := filepath.Join(dataDir, "phone.pb")

	err = os.WriteFile(fileToWrite, rawProto, 0o644)
	if err != nil {
		log.Fatalf("Failed to write: %v", err)
	}

	phonev2 := &addressbookv2bp.PhoneNumber{}
	err = proto.Unmarshal(rawProto, phonev2)
	if err != nil {
		log.Fatalf("Failed to unmarshal: %v", err)
	}

	log.Printf("Phone V2: %+v", phonev2)
}
