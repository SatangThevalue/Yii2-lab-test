<h1 align="center"><b>Lab-Test</b> - Specialized Computer Programming</h1>

<div align="center">

[![Status](https://img.shields.io/badge/build-passing-brightgreen)]()
[![License](https://img.shields.io/badge/License-BSD_2--Clause-blue.svg)](https://opensource.org/licenses/BSD-3-Clause)

</div>

---

<p align="center"> 
      Lab-Test - Specialized Computer Programming<br>
</p>

## 📝 Table of Contents

- [About](#about)
- [Modules in the project](#modules)
- [Getting Started](#getting_started)
- [Deployment](#deployment)
- [Usage](#usage)
- [Built Using](#built_using)
- [TODO](../TODO.md)
- [Contributing](../CONTRIBUTING.md)
- [Authors](#authors)
- [Acknowledgments](#acknowledgement)

## 🧐 About | เกี่ยวกับโปรเจค <a name = "about"></a>

<div align="center">
<img src="https://upload.wikimedia.org/wikipedia/th/thumb/a/af/RMUTTLOGO.png/150px-RMUTTLOGO.png"  width="150" height="275"><br>
<img src="https://upload.wikimedia.org/wikipedia/th/thumb/6/63/RMUTT-logo-01.png/230px-RMUTT-logo-01.png"  width="229" height="85">

This Lab-Test Project in Specialized Computer Programming ( Code : 09152103 )<br>
<b>INSTRUCTOR : </b>[Assistant Professor Pongpon Nilaphruek](https://www.linkedin.com/in/pongpon-nilaphruek-01a30335/)<br>
<b>NAME :	</b>[Mr.THANAPHOL NANTAKASET](https://www.linkedin.com/in/satangthevalue/)<br>
<b>FACULTY :</b>	[Science and Technology](https://www.sci.rmutt.ac.th/)<br>
<b>PROGRAM :</b>	[Big Data Management and Analytics](https://www.bigdata.rmutt.ac.th/) <br>

<img src="https://scontent.fbkk29-8.fna.fbcdn.net/v/t39.30808-6/294737392_391632463063442_5752770952954949927_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFdsBJs34R9Fhl9LuQwZqbq14dEbj9I16XXh0RuP0jXpbO4NmAXtTf_Mu99cEInhTyyKHpN8DS0quVBQjlZ4E2a&_nc_ohc=-YxxJy3oAwsAX_kFJWP&_nc_ht=scontent.fbkk29-8.fna&oh=00_AfC5Q-4u6WSD175-o1_YSi5o5qnoaG04cQJuNvytcRHZ6A&oe=644714CA"  width="150" height="150">
</div>


<br>
### 🏁 Getting Started | เริ่มต้นใช้งาน <a name = "getting_started"></a>

This project was built in php using a yii2 framework. 

### Prerequisites | ข้อกำหนดเบื้องต้น

 - PHP 5.4.0 or higher is required.
 - MySQL
 - Add Hosts In Windows or run ' Add Hosts ' in Project
```
127.0.0.1 db.lab.local
127.0.0.1 admin.lab.local
127.0.0.1 lab.local
```

### Installing | การติดตั้ง

Download the source code from Github.<br><br>
latest versions of the dependencies and to update 
```
RUN IN CMD
docker-compose build --no-cache
docker-compose up -d # run all services
docker-compose stop nginx # stop only one. but it is still running !!!
docker-compose build --no-cache nginx 
docker-compose up -d --no-deps # link nginx to other services

## or

php composer.phar up -d
```

## 🔧 Running the tests | การดำเนินการและทดสอบ <a name = "tests"></a>

  - https://www.yiiframework.com/extension/yiisoft/yii2-app-advanced/doc/guide/2.0/en/start-testing

## 🎈 Usage | การใช้งาน <a name="usage"></a>

You can use it with a web server emulator.<br>
 - [XAMPP](https://www.apachefriends.org/) - Web Server 
 - [PHP : Hypertext Preprocessor](https://www.php.net/) - Web Server 
 - [NGINX : Advanced Load Balancer, Web Server, & Reverse Proxy](https://www.nginx.com/) - Web Server 
 - [Docker](https://www.docker.com/) - manage containers

## 🚀 Deployment | การปรับใช้ <a name = "deployment"></a>

Add additional notes about how to deploy this on a live system.

## ⛏️ Built Using | สร้างโดยใช้ <a name = "built_using"></a>

- [Yii2 PHP Framework](https://www.yiiframework.com/) - Web PHP Framework
- [MySQL](https://www.mysql.com/) - Database
- [Bootstrap](https://getbootstrap.com/) - CSS framework

## ✍️ Authors | ผู้เขียน <a name = "authors"></a>

- [@SatangThevalue](https://github.com/SatangThevalue)

See also the list of [contributors](https://github.com/kylelobo/The-Documentation-Compendium/contributors) who participated in this project.

## 🎉 Acknowledgements | กิตติกรรมประกาศ <a name = "acknowledgement"></a>

- [BIG DATA RMUTT - Yii2 By Pongpon Nilaphruek](https://www.bigdata.rmutt.ac.th/?tag=yii2)
- [Yii2 Guide](https://www.yiiframework.com/doc/guide/2.0/en)
- [Yii Framework 2 (Yii2) by Programmerthailand](https://www.programmerthailand.com/tutorial/category/yii-framework-2-%28yii2%29/1)
- [AdminLTE Theme](https://www.programmerthailand.com/tutorial/view/extension-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87-theme-%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2-yii2-adminlte-theme/94)