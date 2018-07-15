let x = 0;
while (x < 10){
  print(x);
  x += 1;
}

let total = 0;
for (let i = 0; i < 10; i++){
  total += i;
  i += 1;
}

print("total =", total);

function sum(numbers){
  for (let i = 0; i < numbers.length; i++){
    total += numbers[i]
  }
  return total;
}

sum([1, 2, 3, 4, 5]);
print(total)

const object = {
  "a": 1,
  "b": 2,
  "c": 3
};
for (const key in object) {
  const value = object[key];
  print(`key:${key}, value:${value}`)
}
