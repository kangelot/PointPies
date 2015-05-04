//set the interval so that the transaction function will execute every minute
var t = setInterval(initialEscrowServices(address), 60000);
//javascript function to query the block explorer until there are 5 confirmations, 
//then execute the escrow services (whether it is ordering a pizza, sending an e-mail alert to a merchant, or anything else)
function intialEscrowServices(num){
    $.ajax({
	url: "http://blockexporer.bitcoin-class.org/rawtx/" + num,
	datatype: 'jsonp',
	success: function(data){
	    if( value.(*btcjson.TxRawResult).Confirmations >= 5){
		//execute any requested escrow services depending on merchant choice
		//this is where an automatic pizza order would go, or an automatic e-mail alert to the merchant that payment
		//has been confirmed, and the product can be sent
		clearInterval(t);//stop the minute loop after enough confirmations are found
	    }
	}
    });
}
//Javascript function that is called as soon as delivery of product is confirmed by customer
//This would be executed when the pizza API responded "delivered" to a request
//This could also be triggered by some confirmation by the customer on our website
function transactionToMerchant(address){
    /*****GO CODE THAT WOULD EXECUTE A TRANSACTION*******/
    /**
package main
 
import (
	"flag"
	"fmt"
	"io/ioutil"
	"log"
 
	"github.com/PointCoin/btcnet"
	"github.com/PointCoin/btcrpcclient"
	"github.com/PointCoin/btcutil"
	"github.com/PointCoin/btcwire"
 
	"time"
)
 
var firstAddr = flag.String("from", "", "The first addr to send to.")
var secondAddr = flag.String("to", "", "The second addr to send to.")
var amountToSpend = flag.String("amount", "", "The amount you will send")
 
const (
	// This should match your settings in pointcoind.conf
	rpcuser = "PointPies"
	rpcpass = "pointpies"
	// This file should exist if pointcoind was setup correctly
	cert = "/root/.wallet/rpc.cert"
)
 
func decodeAddr(s string) (btcutil.Address, error) {
	addr, err := btcutil.DecodeAddress(s, &btcnet.MainNetParams)
	if err != nil {
		return nil, err
	}
	return addr, nil
}
 
// setupRpcClient handles establishing a connection to the pointcoind using
// the provided parameters. This function will cease with an error if pointcoind or wallet
// are not running.
func setupRpcClient(cfile string, rpcuser string, rpcpass string) *btcrpcclient.Client {
	// Get the raw bytes of the certificate required by the rpcclient.
	cert, err := ioutil.ReadFile(cfile)
	if err != nil {
		s := fmt.Sprintf("setupRpcClient failed with: %s\n", err)
		log.Fatal(s)
	}
 
	// Setup the RPC client
	connCfg := &btcrpcclient.ConnConfig{
		Host:         "127.0.0.1:8332",
		User:         rpcuser,
		Pass:         rpcpass,
		Certificates: cert,
		// Use the websocket endpoint to keep the connection alive
		// in the event we want to do polling.
		Endpoint: "ws",
	}
 
	client, err := btcrpcclient.New(connCfg, nil)
	if err != nil {
		s := fmt.Sprintf("setupRpcClient failed with: %s\n", err)
		log.Fatal(s)
	}
 
	// Test the connection to see if we can really connect
	_, err = client.GetInfo()
	if err != nil {
		log.Fatal(err)
		s := fmt.Sprintf("setupRpcClient failed with: %s\n", err)
		log.Fatal(s)
	}
 
	return client
}
 
func main() {
	flag.Parse()
 
	client := setupRpcClient(cert, rpcuser, rpcpass)
 
	to, err := decodeAddr(*firstAddr)
	if err != nil {
		log.Fatal(err)
	}
 
	from, err := decodeAddr(*secondAddr)
	if err != nil {
		log.Fatal(err)
	}
 
	amnt, _ := btcutil.NewAmount(amountToSend)
 
	forward := true
		// Unlock the rpc wallet with the current passpharse for 60 seconds
		err := client.WalletPassphrase("password", 60)
		if err != nil {
			log.Fatal(err)
		}
		var resp *btcwire.ShaHash
		// Send pointcoin either to the 'to' address or back to the 'from' address.
		if forward {
			resp, err = client.SendToAddress(to, amnt)
		} else {
			resp, err = client.SendToAddress(from, amnt)
		}
		if err != nil {
			log.Println(err)
		}
		log.Printf("Sent a tx: %s!\n", resp)
 
		forward = !forward
	
}
     **/
}
