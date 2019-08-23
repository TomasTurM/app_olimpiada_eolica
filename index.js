fetch('./request.py')
.then(response => response.json())
.then(json => console.log(json))