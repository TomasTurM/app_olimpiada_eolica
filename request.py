import requests

def request():
    request = requests.get('http://192.168.30.199:9090')
    request = request.json()
    return request

request()