#!/bin/bash
###############################################################################
#                                                                             #
# @author       Manpreet Singh                                                #
# @email        manpreet.singh@likelinux.net, manpreet@support.likelinux.net  #
# @package      Shell Script                                                  #
# @link         http://www.likelinux.net                                      #
#                                                                             #
###############################################################################

host=$HOSTNAME
now=$(date +"%T")

## Creating Function for checking the ports
PortCheck() {
                for port in  80 25 53 443 143 110 8080
                  do
                if nc -z $host $port  >> /dev/null
                 then
                      echo -e  `nc -z $host $port | awk '{print $6}'`  port $port is up  # >> /dev/null                        # Use this Syntax for email
                      # echo -e "\E[32m[OK]\E[m" `nc -z $host $port | awk '{print $6}'`  port $port is up  # >> /dev/null      # Use this Syntax for diplaying on screen
                 else
                      echo -e port $port is down at $now                                                                       # Use this Syntax for email
                      # echo -e "\E[31m[ERROR]\E[m" port $port is down at $now                                                 # Use this Syntax for diplaying on screen
                  fi
                done
             }

PortCheck > /tmp/portdown                                                                               #Function Called and redirected its output to a file
cat /tmp/portdown | mutt -s "Port Service of `hostname`" -- manpreet@support.likelinux.net              #Send the output to the email
