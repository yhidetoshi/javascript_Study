process.stdin.resume();
process.stdin.setEncoding('utf8');
process.stdin.on('data', function (chunk) {
    var lines = chunk.toString().split('\n');

    console.log(Math.floor(lines[0]/[lines[1]]))

});
