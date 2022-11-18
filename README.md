# QR-checkin
 Check the participents with a QR code that contain the id in the url parameter .
- if it exist it redirect you to a page with the info of the user
- else it redirect to a page with the text non cheched

## 1 Importer la BDD ver le serveur wamps:
![alt text](https://github.com/bien7327/QR-checkin/blob/check-id-php/capture/import_db.png)

## 2 Fonctionnement : 

## Generate the QR code : (for each id)

with python or a generator onlie that containe the path to the page **index.html** , with the **id** as a parameter : 

'''
http://localhost/checkin/index.php?id=1
'''
# that it !!!
