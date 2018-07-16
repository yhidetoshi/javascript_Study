process.stdin.resume();
process.stdin.setEncoding('utf8');
process.stdin.on('data', function (chunk) {
    // 改行区切り
    //var lines = chunk.toString().split('\n');
    // スペース区切り
    var lines = chunk.toString().split(' ');

    var tempe = 25
    var humi = 40
    //console.log(lines[0]);
    //console.log(lines[1]);

    if (lines[0] >= tempe && lines[1] <= humi ){
        console.log('No');
    }else if (lines[0] >= tempe || lines[1] <= humi ){
        console.log('Yes');
    }else{
        console.log('No');
    }

});
