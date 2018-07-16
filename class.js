var Man = function(name, age) {
  this.name = name;
  this.age = age;
};

Man.prototype = {
  sayName: function() { print("My name is " + this.name );}
}

var bob = new Man('Bob', 30);
bob.sayName();
/*
My name isBob
*/

var User = function(name, age){
  this.name = name;
  this.age = age;
}

var taro = new User('Taro', 30);
print(taro)
print(taro.name)
print(taro.age)
/*
[object Object]
Taro
30
*/
