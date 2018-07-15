var weight = 60

if(weight < 65){
  print("success")
}else{
  print("fail")
}

/*
success
*/

var flag = false;

if(flag){
  print("trueの処理")
}else{
  print("falseの処理")
}
/*
falseの処理
*/

const version = "ES6";

switch (version) {
  case "ES5":
    print("ES5!!");
    break;
  case "ES6":
    print("ES6!!")
    break;
  default:
    print("No version")
    break;
}
