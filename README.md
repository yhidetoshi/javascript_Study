# JavaScript

- 環境
  - OS
    - Mac
  - 実行方法
    - jsc: `jsc hoge.js`

- bashrcに以下を追加(今回は .zshrcに追加した)
```
if [[ "$OSTYPE" =~ darwin ]];then
  jscpath="/System/Library/Frameworks/JavaScriptCore.framework/Versions/A/Resources"
  if [ -f $jscpath/jsc ];then
    export PATH=$PATH:$jscpath
  fi
fi
```

- `$ which jsc`
  - `/System/Library/Frameworks/JavaScriptCore.framework/Versions/A/Resources/jsc`
