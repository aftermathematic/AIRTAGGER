#!/bin/bash

echo ""
echo "starting..."
echo ""
echo "Fetch useraccount"

#=========================================================
#GET APPLE ID FROM ACTIVE USER
AccountID=`/usr/libexec/PlistBuddy -c "print :Accounts:0:AccountID" ~/Library/Preferences/MobileMeAccounts.plist`
if [ -z "$AccountID" ]
then
echo "ERROR: Useraccount could not be found. Aborting"
else
#=========================================================

counter=0

echo "Check if Airtagger.csv exists"
if [ ! -f Airtagger.csv ]
then
echo "Airtagger.csv does not exist, creating one"
#Header for the CSV file (currently set up to append to the file)
echo AccountID,datetime,serialnumber,batterystatus,locationpositiontype,locationlatitude,locationlongitude,locationtimestamp,mapItemFullAddress,addresscountry,itememoji,itemname,AccountID >> Airtagger.csv
fi
echo ""

touch Items_old.json

echo ""
echo "====================================================================="
echo "                     A  I  R  T  A  G  G  E  R "
echo "====================================================================="
echo ""

#Start an infinite loop
while :
do

let "counter=counter+1"
#echo "Create a copy of the Items.json file to prevent changes while the script is running"
cp -pr ~/Library/Caches/com.apple.findmy.fmipcore/Items.data Items.json
echo "#$counter"
airtagsnumber=`cat Items.json | jq ".[].serialNumber" | wc -l`  
echo ""
echo "Amount of Airtags to process: $airtagsnumber"
#echo ""
airtagsnumber=`echo "$(($airtagsnumber-1))"`

airtagcount=0   
for j in $(seq 0 $airtagsnumber)
do

let "airtagcount=j+1"
itemnameclean=`cat Items.json | jq .[$j].name`
echo "Processing Airtag number $airtagcount: $itemnameclean" 

datetime=`date +"%Y-%m-%d  %T"` 
itememoji=`cat Items.json | jq ".[$j].role.emoji"`
itemname=`cat Items.json | jq ".[$j].name" | sed 's/null/""/g'`
serialnumber=`cat Items.json | jq ".[$j].serialNumber"`
batterystatus=`cat Items.json | jq ".[$j].batteryStatus"`
locationpositiontype=`cat Items.json | jq ".[$j].location.positionType"`
locationlatitude=`cat Items.json | jq ".[$j].location.latitude"`
locationlongitude=`cat Items.json | jq ".[$j].location.longitude"`
locationtimestamp=`cat Items.json | jq ".[$j].location.timeStamp"`
mapItemFullAddress=`cat Items.json | jq ".[$j].address.mapItemFullAddress" | sed 's/null/""/g'`
addresscountry=`cat Items.json | jq ".[$j].address.country" | sed 's/null/""/g'`

oldMapItemFullAddress=`cat Items_old.json | jq ".[$j].address.mapItemFullAddress" | sed 's/null/""/g'`

if [ "$mapItemFullAddress" != "$oldMapItemFullAddress" ] && [[ -n "$locationpositiontype" ]]; then
    echo $AccountID,$datetime,$serialnumber,$batterystatus,$locationpositiontype,$locationlatitude,$locationlongitude,$locationtimestamp,$mapItemFullAddress,$addresscountry,$itememoji,$itemname,$AccountID >> airtagger.csv
    echo $datetime - $mapItemFullAddress
	echo ""
fi

done

cp -pr Items.json Items_old.json

echo ""
echo "---------------------------------------------------------------------"
echo ""
sleep 30

done

fi  