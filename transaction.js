function transaction(num){
    $.ajax({
	url: "http://blockexporer.bitcoin-class.org/rawtx/" + num,
	datatype: 'jsonp',
	success: function(data){
	    if( value.(*btcjson.TxRawResult).Confirmations > 5){
		//execute pizza order
		//but actually just send a new transaction to another address
	    }
	}
    });
}

transaction(address);
setInterval(function(){
    transaction(address)
}, 60000);
