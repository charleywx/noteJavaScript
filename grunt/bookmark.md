npm init 命令会创建一个基本的package.json文件。
npm install 将依据package.json文件中所列出的每个依赖来自动安装适当版本的依赖。

npm install <module> --save-dev命令。此命令不光安装了<module>，还会自动将其添加到
npm install grunt@VERSION --save-dev devDependencies 安装指定版本

cnpm install grunt --save-dev
cnpm install grunt-contrib-jshint --save-dev

大部分 grunt-init 模版都会自动创建特定于项目的package.json文件。

安装grunt命令行工具：
sudo npm install -g grunt-cli
sudo npm install -g grunt

开发者工具grunt-init
sudo npm install -g grunt-init

npm set init.author.name "charley"
npm set init.author.email "charley@a.com"
npm set init.license "aaa"

