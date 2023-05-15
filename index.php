<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Foundation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transfer.php">Transaction History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customers.php">Our Customers</a>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
 
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/004/585/326/small/banking-building-business-finance-management-low-poly-wireframe-illustration-isolated-background-free-vector.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Easy Money Transfer</h3>
      
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/736x/15/3a/45/153a4535df6cf2d2b106a558b750c486.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3> Quick Personal Loans   </h3>
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBESEhIRDxESEhgSERIREQ8SEhISERIRGBQZGRgUGBgcIS4lHCMrIRgYJzo0LC8xNTU1GiU7QD00Py40NTEBDAwMEA8QHhISGjQsJCQ0NDQ0NDE0NDQ0NDQ0NDQ0NDQ0NTQ0NDE2NDQ0NDE0NDE0NDYxNDQ9NDQ0PTQ0NjQ0NP/AABEIAKMBNgMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAABAgADBAUGB//EAEYQAAIBAgQDBgIHBgMFCQEAAAECAAMRBBIhMUFRYQUTIjJxgZGhQlJykrHB0QYjM2Ky8BQkZENTY4LhJTVEc3SUorPCFf/EABkBAQEBAQEBAAAAAAAAAAAAAAABAgMEBf/EACYRAQEAAgIBAwQCAwAAAAAAAAABAhEhMQMSQXEEUWGBIjJCocH/2gAMAwEAAhEDEQA/APYkxSYCYhM+sgkxCZCYhMohMQmQmITAhMRjCTKyZqCMYhMhMQmUEmITITEJlZQmKxkJiEwITEJhJiEzQhMQmEmITABMQmEmKTCATEJhJihSdoCkzNiMbSpkCpURCdgzKCRztL20nPofsM2JwqY0Ym1asvelKi3okNcql9xpbXX0nHy53HUk3Vk22K4YBlIIOoYEEEcwYDPL2r4N+7qKcO2+V/Fhqv8AMrbDfcH1I2nYw3aiMQlUGk5tZWPgfqjbG/8Ad5nx/US3V4qXHT0tHslGRXP+IGZQSRRzrrysbkShuyMxIo1UqMNe7YGlU+60sw2PpKqq9OotgAalOu6tf62W9p0qx1pLVbv6VawpVWGWrTc+XxD133nXdYeWrIyMVdSpG6kWMpJnqMRhjVWrQqeJ6IDUqpHiZCLgN+BnlSZoQmITCTEJkAJikyEwWJ2gAmITC0QmREJiEyEwEyIBMkUmSNo+wExSZCYhMw9KExCYCYCZRCYpMBMQmUEmVkyExSZoRjEJkJiEysoTFJkJiEwITEJkJikwITFJkJiEzQhMQmQmKTAhMUyEwQgGWrsLQLSY62sPrMQo+J3hCIN3ZuiCw+836SWimuPwM6XYuJy9nYUf6en/AEzG1RADamDodXZmPysPlMWExOXBYUf6dP6Zizec+Kb4Udpdog5kdVqKTco4ut+fQ9RrOLTw1JlIpeUsQMNW1pltytN9MpsfXo0ox9bUzBSxbpfKdGBDIdUNxYm3O05+bDHLuJMrHUoYt6bZKZd7aNha/hrIdyEb6Y6Wv/KJ1cL2ilUAI7XX/ZsSGTnp+Y0nlxis6hKw7xQLKSfGg/lb8jcRK2YeO5qBdQ48NZB14n1v8Jxxvk8f5n+13K9i1Rrk5muRYnMbkcieMoaYex+11bLTrpnzDwV0coz2+iwIIv7D479dqdNvK5XpUXT7y3/AT1YZzObjNmmJpWTNNbDOozEXX66kOnxGgmVpqohMZTpKiYpMS6DVTKiZCYpMzaiExCZCYpMghMkUmSRH14mITATFJh6EJikwExCYBJiEyExSZoEmITATEJlBJikwExCZWRJiEyExSYEJikwExSZoQmITITFJgQmKTATFJhEJjK9th7nX5SomQNAuuSbkknmdYQJeMIcge/I3NguvIneKFQbsW6ILD4t+kmxS40PoZwxUthcMP9On9M9G7oAbUxsdXZmO3Sw+U8kz/wCWw4/4Cf0yY/3/AFUvTkYprmYzNGIaZ5yzvLIidPs/HmmjU2RKiOc1mFmV7WzK242tOasuQRj2U7U8quV0FOtTZejEZiB08vwnpXnFrUR/hKrrr/maauPqjIlj+M9E9Om3kqFT9Woun3lv+AnP6efyzk+7WXUZUqMhujFTzBtGasj/AMRcp/3lMAfeTY+1oa2GdRmIuv11IdPiNBMjT08xka9ErrcMp2ddVPToehmcmXJWZCbWIOjKdVYciJK1NSM6Xy/SQ6mmT+I5GLN9DOTFJkJikzABMUmQmKTIiEyRSZJB9bJikxSYpMruJMUmAmKTAhMQmAmAmaEJiEyExCZWRJiEwExSZQxMQmAmITAJMQmQmKTAJMQmAmITAJMQmO4sq/zXPtew+YaVEzSITCjgHS1+Z1+UrJnc/wAHTqUaedbMKa5XXwutxwP5G4MzbpXM7xjuxPqSZYplNeg9I+L94v11HiH2k/MX9BDTqAgEEEHUEG4I9Y3tF7bH0P4TzOCw4qph6bNkBw4JYDNbLTLXtx2no2bQ+h/Ceb7GbxYVfrYdl+NFxJj/AG/VS9MtTsGo5PcvRq9EqBXH2kaxUyqt+z9VEZnemHVS60FcPUZR52AHIa8YnaeOqd5UGcOubOq1ESsqhhmAUOrZdDwleE7XqIwPgC5gWWnRoUybbHwqLkb66cDoTOVym+kY1lqzb2nglA7+iBkexZVvamzbW/kbWx4aqbEWmBTLjwjcK9sNi0+vXw3xCzu1Fnm3H7uv/wCfRPyA/OenqCY+n/vn8tZdRnSoyG6MVPMG0ZqyP/EXKf8AeUwB95Nj7WiOJQ89G9MjiKJWx0ZTs66qenQ9DKadUobjXgVOzKd1MdKzITbUHRlOqsOREWsikZ0vb6SnUofzHIyX7wLXQKfDqrDMhO+U8D1Go9pQTLS10t9Vrj0Ya/MD4ygmYohMQmEmITIITJFJkkR9YJikwExCZp3EmKTATFJlBLRCYCYhMrIkxSZGMQmUQmKTATEJlBJikyExCYBJiEyExCYBJikyExCYRfiPLSPOmf8A7HmYmbGXNQHOmxe3/Dc5b+zqfvzATEEJnocM/wC7p/YX8J5wmdqiR3dPNlACHVrWB7trEdb2tYg32M5+bP0YXLW9crjPVdLarTlYihYlkORjqbC6Mf5l4+oses6eMUIxUNm1fpazWtqcw4ebW4O+8wVGmPD5cfNhM8eqZS43VZRiwLq4yGxAN7oxtwb8jYzz3Z1fI+CY8O5B9DYH5GehqUc9xa4432tOF2n2YAAKT2I0C/RHILxE69XbF6c3tulkrFeSooP2ECH/AOSMPadTC/s0lTDYd1xIGJxKVXoYQoQlREdlyipsGOUkX0O3WY/2icOyVAMpa4dDoQTZzpx8b1NRpoJ9L7L7Jw2Kw3Y1Uo7PRSjkr02AFNqSh2V1OhUvTKniCfWefO6qybfLuzO0WpHKdUNwVKhrA+YZT5geKm17bggEae0cDTCrWomyOwQobnIxRXBVjYspVlIuARexlXb+G7rGYpGIOXEVfLtYsWFvYibO1LrhKI2zPTb7uEoqfnOmPXKOa9+6q21viKdz0Cg/lPU1Z5ZB+4qf+op/0z1T7+8z9Lzln8rl1FDpzmWqlpsqSgpmuOk9dx2xtgcxadUqbjXgVOzKd1MuxNPLqDMpM45bxqraoC3y+VlBUne2YaHqLEe0zkywtdLfVa49GGvzA+MpJkyEJiEwkxCZi0QmSKTJJsfViYpMBMQmdXYSYhMBMUmVlCYCYCYhMAkxCYC0UmUQmAmAmITKCTFJgJikwITATATEJhBJiEwFoCYGsVjT7pwMwNNgynZ1NRwyn1EXE4YJZlJZHuUbj1VuTDjEvmpab0nvb+R7C/swH35MPist1Izo3nQm1+TA/RYc4GdxNxrOqIVXMMi3X21PPl85nxNDwl6ZzpxP006OvD12Mrw2Ly2V/LzG4H5yZQbKeIFQAKT4QbIT5ATcgDYcDpzljIF1c/8ALxlVR0IPdaEgjOLg6kE6DbYdZkVqin96Cwv5xy5ngPx9ZjGTGa1qfgt2uq1GbRdB0nR7DRUYrUC5X4laO44FqgIC2v72lYRKYOYgkaFQRobXsZzMdiy2g9hL5PHPJhcb7pMrjdx0f2p7Np92XRAF0zpYeG9rOupt5l2JHiBBtcL5v9lv2yr9nK9IKtemWLCk7lCj8WRgDYHiLb66a31Ij1AqszFV8qX8K6k//pvvHnOXTwdLEjKhPeJ4Ct0FU5dLpmIWoumxKsu1yLAccfF5MMJjnd/a/hblLdzhz8XXfGYl3IAfE1r2HlVnawHoLj4Tq9vMGXDhTcMKtcaW8FWoTTFuiqomjAdh92Wd+8RQpD16qLRSmhFnyKHYs5BKg6BcxOptbkdrdod9VeooyrotNfq01FlHTQX95uT0zdRFX/KueeJUfBRPS1uM4CJ/2fm/1dv6Z3apk+k5yz+TP2Z3eZ3qEG4ltSZXM9VrJa9UtvMrSxzKmnHK7ADaHqPzErJhaITMUQmKTITFJmRCZIpMkmx9SJiEyExSZ3dBJiEwExCYBJiloC0QtAYmITAWiFpQS0BaKWiFoDExSYpaIWgMTATFJiloQSYpMUtFLQLqFfIwawI1DKdmQ6FT6iHE0slmQlkfVH49Vbkw4/8AWZiZdhajAMCAyG2dWNlvwIPBt7W16GNoqSqykMjFSNiDYy1qtN/Ovdt9emBlPVk/S3pLMT2eVXOrEpfzMlRSvRhbT12mJqdtWOnArrc8unvr0jY2UMDWYk4dTWyjMTSBcgc2S2Ye4mvD9pqAUcKGtqwN1PToZzV7TqouSixpL9LuyVdzzZ/N7AgabRUxVRtCO9sL2ZO8a32vMPjGw+MLO+ZGIJ34gj+/WTDUzvUGXxZS1jl2ve/LrIlQLcmmAbE5FqoB7qxJ+c00u18JXpKPHTYhSUdEdcxH0HDC/wAAZZrfFZpsRVWmtksbjzD8p4ZiLk/zE/OeirUwG8FYFbm4ZagPHXY31nmKlrnxDc/W5+knlzt1wSLa2KqOAHd2A2DOzAegJ0lN7yKoO5HwM0U6a8z8APznn1cq3HVof93Vf5MXTP3iP0ncsjqSHyvf+GwshH8r33vwI95w1qKMHi0C/wDicORc+p4W5TZ/im4ELyygLp67mX6b+OWc/KZcyLKlNgbMMp5HQ/DeVrh2ckICxG9he35fOKtTQ8bEXBv5dbj0vab8PXVnpspsEdW/w+g0DC4Q6BiRprZj1ntk2xXFqJYkG4I0IZbEesodSP14TtOE8jOKlvCqsjrVW3AEKbehuOk5uKpqjMquHGW5IvoeAPW/97zOfjkJWJohhYxWnlqlJikyExSZgQmGKTBA+oExC0UmKWnodBLRS0BaVloDExCYC0UtAJMQtAWiFoBLRS0BaIWlQxaKWilopaQMWiFoC0UtAYtELRS0UtAYtLQ2ZFUEAozHKTbNmy6g89LfC0oCE267cz6DcwvTKkh7qV8ylWVgeRBGkaR0KWMdTmCVEbxAsiknbwm7anXQqxKkHhK8RXpNnDL3ZfJ/DsyqwsWLJew1zAWN7E3HOjtLtAuiItKlSRPKqKMx0+m/mb35zn5pN6G6jg2d0VCHDOqlqfiIBNr5fMPhLKSd4hdmyIpt3aDvGXkWFwPdiL8OU51PNcMmYFTcOLjKRxzcJuHabBgxYZvrFcyknexHiX2uPQTUsGpcLSbKlNalZmzeEgU8oA2AUm+gJvfaeQxKlCaTWvT8OjKwI4MCNDcW+c9QvaNO4fJTRwbq9N6gRW4N3ZQ6jhYgdJzcdgqLrmZqhbUK4p2UH7d7t6WHrJl98U+XHpdoOmh8Y5E6j3mO1zc8TNfcik/7xRVS1i3iQjrpcqRbezDXaaB2cjjPhqq1RYk0iriugHEqBZx1UnqFnCbyuqutMdNI7vYWEVmHBh7A/pKXYcz8P+s3lZjNQjpI98NWH1q9HpwedRsK3F6P/uKB/BpxaDj/AA9XT/a0tSTYaPwE6bOALlxqbBadgbc2JFwNeI5zj4N3LK792svZecFWF2C5gNSabJVyjmchNh6xe4fIKjjIjqzJUcMq1cpsVTQgnX09JlsLd4hZSrqNTZgxBIKsPsnlbSX9739Nw5/eUkNRH27xF86vzYLdg25ykG+lvT67j30xrao4pyCuZtrC7WYr9XNa9ul7TK7Hba3DrFJlmGrU1a9Wmai2IyCoabXtoQwBtb0kudvFqaUkxCZdVprujZxZb3ARgxGoy3JIFjqNPS4mcmYvAVjATI0UmYVLyRbySD6WTEJgYxC09LYkxSYCYhaASYhaAtELQglopaKWiFpAxaIWgLRC0By0UtELRS0Bi0UtFLRS0gctJTOvoCQOoEqLRc/ERLqo7WEZWUCkwRyLPmNnqE75HOg9PCeF2m/G1FdjnNNgVTNTqFqdSm5Vc4VmHh8WbTVeNp5fv/bqNvhLf/6DWUMc1tFLorZByFzt0Nx0mppGnHYXu8rqyulQ5VBZM5HEEAm46j5HSc5QoN2uRrYA6m21zwHzl+Op1kyvVR171cyPUuS6bXU8vSYc0mV9iN9ftSo1PuVIp0gc3coLIWGzNxZup1nPJ1hVSxsoJ46cBzPKQoOLoOly3zUETPNUhPP8ZpodoVEQ0g2ZCczUXGZC3EgHytbS4seomd6ZsSpDWBNlOvwOvymfD1VUhqxLLf8AhJZXbmM1rJvyN7HbeTeqNRUOfAMuhZgT4VHE5jsNRv8AMzJUwSXzU3ZXHi/doSt+B1II9QJsbHU6hcIiUFcJZELsFZeZYliDc89bcoUzjygnQCyFWW/E3BsL9QZi6yvNZ3ZeXHx2KdrCuihwf41iHcW2cjRjtqRm5kzJed9yLlqoRtDano9zY2vwABN9dfxHHq4S2qH/AJSdPYzllLvjmNy7W02/cPrb97Sv1HjnQFO+qOtuJYhSv2h+l/ynLw6vlAIAAdGtofLmtpx83ynRGNb6lE9e4pD5BY8O8d2ztq6p8TWNR7Lc7BVA3Nhcqg2ueAl6nuEqZ7d5UptTCXuadN9HZ/qsVuoXcZiTbS+Q46paytkvv3apTv0JQC/vM4M6W3K8pNTo5MiqTfgBuToBKgZY58CW2GYH7ZJ39svwmpyysFLS4Dt1VNPjeVMVPEg8yv42P5R6bqbLoDsCyrlJ6sACvxMJcPlzHzXALG7I42ueKm4329tekxlnDLM6kb+x3BHQysmWX8GvFgV+BzH+n4SkmccuGol4Yl5JgfSC0rZoGaITPW0JaIWgZpWWhDFohaKWilpAS0UtFLRGaRDFohaBmiFoDlohaIWilpNhy0QtFLRS0bDlopaVloC0AlucBMUtFJkGlMa4UoHJQ6lG8SXsQDY8Rc25SjQ7fA8fQ/37wMh42HQkX+G8XKenqCNPWN0X4hrBUG2RX+0xFyTzsbjpb1mgVswOufKLkA5yoG5yVF19jMRqgDKRmA2OxF/qn9fhK8yjUM67jyi9iLEXzS+rVNNOJoqVYrYEIXGW+Somt2W+qkWNx0PKc+rqqsdyWW/MALYnnuR7S41AB5nOhUA+AAG9xoTobnlvDUxivTSm9KmuQnLWpqRVsTfKwLWcctj1mcrjYRz2EdMSR5tR/e44yMvHfr+sqYThzOmnSw1NapCIwVzoqufA7a6BvonYAHTc3ErxFJ6bslRcrIcrLcGx9RofaYQhvxBPAC5+EuD5QAw05ggj5bTtN2czSCTDTQuyoNCzKoJ2uTYX+MXfY36bH2l9N6SoSwqO58mVhTSmQRZidS/HQZbWGpmfTTYF1FigUA6B3XMzdSLEL6W9zvA1TS5VSL/UFNuOqlfTjf0imuCSWU3PmKkAMeZUi1/S0tp0S6s6U2qKlswzABb7eAeJuOx9YmrOJy1flW9NQwGaykIwYi5CuoYXA3Iv8o1fEU8qrSplSAc9R3LNUvbQr5VAN7W34zK9QsSzG5PtwsBbgIhMkysjNktWlxxUexI/WLnHBR6kkn9PlK7xTJ66aO7k6k3iXkvBM27NDeSLeSTY+htEMkk9tUjStoZJEVmIZJIQhitJJIEMrMkkgBimSSAhimSSQKYDJJAUx6O7HiEYg8jaGSSdiYRAXAIvoxseimVY42cWsNSNANv7Mkk1/j+z3Utx6MR8zA0kk51VZicPjJJM1QWG3iXqV/GCSXDufJUbyKebm/XTjKyfJ9k/1tJJNZf8RB5va8sqb/P5CSSS9X5grMisR4gSCM1iCQRcW4SSTmoNw94skkXsCSSSQAwSSSAGSSSB/9k=" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Net Banking</h3>
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About us</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-16 col-md-6 col-12">
            <img src="https://www.bankrate.com/2021/03/03090936/Top-15-largest-banks-in-the-US.jpg?auto=webp&optimize=high&crop=16:9" class="img-fluid">
        </div>
        <div class="col-lg-16 col-md-6 col-12">
            <h2>Delighting customers with our excellent service and comprehensive suite of best-in-class financial solutions</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, consequatur? Doloribus, ab? Animi praesentium illum aperiam ullam, officiis deserunt similique amet sit velit laboriosam illo explicabo nostrum distinctio dolorem sint! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium numquam, quidem reprehenderit rem, nostrum quo libero ipsum dolorem quod sunt voluptate a ratione quas voluptates veniam atque dolor praesentium quam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quaerat illo saepe fugit nisi praesentium delectus, dignissimos sed explicabo recusandae repudiandae sequi neque expedita nesciunt perspiciatis cum voluptatum velit. Perspiciatis.</p>
            <a href="#">Know More</a>
        </div>
    </div>
</div>
</section>

</section>
<section class= "my-5">
<div class="py-5">
 <h3 class="text-center" >Disclaimer</h3>
 <p1>This website is the
      outcome of a intern project, and does not
      necessarily represent the views of any organisation or any other individuals referenced or
      acknowledged within the website. Anyone may reproduce, distribute, adapt, translate the content on the website, without explicit permission, provided that the content is accompanied by an acknowledgement that Apna Bank website is the source and that it is clearly indicated if changes were made to the original content.</p1>
 </div>



<footer class="text-center  p-3 bg-dark text-white">
        <p>2023 <b>Soniya Naskar</b> </br>Chairman, Foundation Bank</p>
      </footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>