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

    echo "----------------------------------------"
    echo "c. Close all containers"
    echo "l. List all containers"
    echo "lc. List all compose containers"
    echo "q. Exit"
    echo "----------------------------------------"
    read -p "Input:" input input2

    clear

    case $input in
        1)
            # 啟動 php
            docker-compose up -d --build php
            # 啟動 nginx
            docker-compose up -d --build nginx
            ;;
        2)
            # 啟動 php
            docker-compose up -d --build php
            ;;
        3)
            # 啟動 nginx
            docker-compose up -d --build nginx
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
        lc)
            # 查看目前docker-compose 的 contaniner
            docker-compose ps
            ;;
        c)
            # 關閉透過 docker-compose 產生的 container
            docker-compose down
            ;;
        *)
            # 離開程序
            exit
            ;;
    esac
done