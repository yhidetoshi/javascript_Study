function multiple(num){
  return num * 2
}

print(multiple(7))

/*
14
*/

const max = Math.max(1, 5, 10, 20)
print(max)
/*
20
*/

//arguments

function myFunc(){
  print(arguments[0])
  print(arguments[1])
  print(arguments[2])
}
myFunc("a", "b", "c")
/*
a
b
c
*/
