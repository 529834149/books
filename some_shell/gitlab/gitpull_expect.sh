#!/usr/bin/expect
cd ~/www/v5/v5_doc
expect <<- DONE
  #永不超时
  #set timeout -1
  #spawn git checkout bate1
  spawn git pull
  #缓冲区大小不要了
  #match_max 100000
  expect "*?sername:*"
  send -- "zhanghao\r"
  expect "*?assword:*"
  send -- "blogchina.love\r"
  # send blank line (\r) to make sure we get back to gui
  send -- "\r"
  expect eof
DONE