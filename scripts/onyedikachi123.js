const fs = require('fs');
const http = require('http')
const port = 3000

const server = http.createServer(function(req, res) {
  res.writeHead(200, { 'Content-Type': 'text/plain' })
  fs.readFile('README.txt', function(error, data) {
      if (error) {
          res.writeHead(404)
          res.write('Error: file Not Found')
      } else {
          res.write(data)
      }
      res.end()
  })
})

server.listen(port, function(error) {
  if (error) {
      console.log('Something went wrong', error)
  } else {
      console.log('Server is listening on port ' + port)
  }
})