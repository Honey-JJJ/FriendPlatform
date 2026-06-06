# FriendPlatform
基于PHP+Apache+Mysql的Web程序交友互动平台<br>
所需软件：phpstudy，VScode,谷歌浏览器
# 配置方法：
⓪VScode安装插件：Chinese：中文汉化插件<br>
                PHP Intelephense：代码补全、跳转、语法检查插件<br>
                PHP Debug：Xdebug断点调试插件<br>
                Open in Browser：一键在浏览器打开html页面插件<br>
                CodeGeeX：AI代码编写插件<br>
VScode配置php路径：打开“文件”-“首选项”-“配置”，再搜索栏中输入“php.validate.executablePath”，点击“在setting.json中编辑”，添加：<br>
"php.validate.executablePath": "D:/phpstudy_pro/Extensions/php/php7.3.4nts/php.exe",<br>
"php.executablePath": "D:/phpstudy_pro/Extensions/php/php7.3.4nts/php.exe",<br>
"php.debug.executablePath": "D:/phpstudy_pro/Extensions/php/php7.3.4nts/php.exe"<br>
①下载FriendPlatform-main.zip压缩包后解压缩，将FriendPlatform-main文件夹放入phpstudy_pro\WWW下，并打开VScode选择打开文件夹FriendPlatform-main；<br>
②在软件phpstudy首页中选择如下启动项：Apache，Mysql；若Mysql启动失败可打开任务管理器进入详细信息页查找mysqld.exe点击结束进程后再次尝试；<br>
③在phpstudy软件管理中下载phpMyAdmin，并在数据库中配置用户和密码，然后打开phpMyAdmin导入love_system.sql。该项目的数据库相关配置：用户名：root 密码：123456，可在static\config.inc.php和static\connect.php里修改相关配置<br>
④在浏览器网址搜索栏中搜索http://localhost:8888/Lovecode/Index.php可进入到程序主页（端口号依据实际配置信息进行修改）<br>

# 主要功能（增删改查均已包含）：
· 登陆注册<br>
· 查看个人信息<br>
· 修改用户密码和个人信息<br>
· 注销用户<br>
· 趣味答题<br>
· 大厅搜索功能<br>
· 用户端可提交约会申请，管理端可对其申请进行状态修改并返回结果到用户端进行查看<br>
· 添加日记内容<br>

# 数据库设计：
<img width="802" height="622" alt="image" src="https://github.com/user-attachments/assets/d0f9995e-1fd9-42ab-b108-8cfa1e9f78f7" />
<img width="767" height="637" alt="image" src="https://github.com/user-attachments/assets/ddd3dcb4-4271-451d-ad58-d296dc4b5476" />
<img width="757" height="412" alt="image" src="https://github.com/user-attachments/assets/52d2e8f4-8058-4b1a-9c07-995967006d87" />



