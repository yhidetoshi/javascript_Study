const json = "[1, 2, 3]";
print(JSON.parse(json))
/*
1,2,3
*/


const obj = {id: 1, name: "js-primer", bio: null};
const replacer = (key, value) => {
  if (value === null){
    return undefined;
  }
  return value;
}
print(JSON.stringify(obj, replacer));
/*
{"id":1,"name":"js-primer"}
*/

const obj2 = { id:1, name: "js-primer"};
print(JSON.stringify(obj2, null, "\t"));
/*
{
	"id": 1,
	"name": "js-primer"
}
*/

const obj3 = {
  hoge: "hoge",
  toJSON(){
    return "bar";
  }
};
print(JSON.stringify({ x: obj3}));
