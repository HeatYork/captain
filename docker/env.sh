#!/bin/bash
# Program:
#   Project cpatain 本機環境
#
# History:
#   2017/12/08 新增

# 切換到 evn.sh 檔案目錄底下
BASEDIR=$(dirname "$0")
cd "$BASEDIR"

#echo "Do you want to close all containers?"
#read -p "Input(Y/n):" yn

# 關閉透過 docker-compose 產生的 container
#if [ "$yn" == "Y" ] || [ "$yn" == "y" ]; then
#    docker-compose down
#fi

clear

while :
do
    # 選擇要啟動的系統
    echo "----------------------------------------"
    echo "Choose the containers you want to start:"
    echo "----------------------------------------"
    echo "1. Nginx + PHP + MySQL + PHPMyAdmin"
    echo "2. php"
    echo "3. Nginx"
    echo "4. MySQL"
    echo "5. phpMyAdmin"
    echo "----------------------------------------"
    echo "c. Close all containers"
    echo "l. List all containers"
    echo "q. Exit"
    echo "----------------------------------------"
    echo "Choose the operate you want to start:"
    echo "----------------------------------------"
    echo "ct. create table"
    echo "rb. rollback"
    echo "----------------------------------------"
    read -p "Input:" input input2

    clear

    case $input in
        1)
            # 啟動 php
            docker-compose up -d --build php
            # 啟動 nginx
            docker-compose up -d --build nginx
            # 啟動 mysql
            docker-compose up -d --build mysql
            # 啟動 phpmyadmin
            docker-compose up -d --build phpmyadmin_mysql
            ;;
        2)
            # 啟動 php
            docker-compose up -d --build php
            ;;
        3)
            # 啟動 nginx
            docker-compose up -d --build nginx
            ;;
        4)
            # 啟動 mysql
            docker-compose up -d --build mysql
            ;;
        5)
            # 啟動 phpmyadmin
            docker-compose up -d --build phpmyadmin_mysql
            ;;
        s)
            # 啟動指定的服務
            if [  "$input2" == "" ]; then
                echo "which service do you want to start?"
            else
                docker-compose up -d --build $input2
            fi
            ;;
        d)
            # 關閉指定的服務
            if [  "$input2" == "" ]; then
                echo "which service do you want to shutdown?"
            else
                docker rm -f $input2
            fi
            ;;
        l)
            # 查看目前的 container
            docker ps -a
            ;;
        c)
            # 關閉透過 docker-compose 產生的 container
            docker-compose down
            ;;
        ct)
            # 執行 migrate
            php ../vendor/bin/phinx migrate
            ;;
        rb)
            # 執行 rollback
            php ../vendor/bin/phinx rollback -t 0
            ;;
        *)
            # 離開程序
            exit
            ;;
    esac
done