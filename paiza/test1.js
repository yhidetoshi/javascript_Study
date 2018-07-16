process.stdin.resume();
process.stdin.setEncoding('utf8');
process.stdin.on('data', function (chunk) {
    var lines = chunk.toString().split('\n');

    var Scount = (lines[1].split('S').length - 1);
    var Rcount = (lines[1].split('R').length - 1);
    console.log(Scount,Rcount)

});
