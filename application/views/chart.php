    <html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <script src='<?php echo base_url('assets/js/plotly.min.js') ?>'></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <?php 
    $this->load->model('Madd');

    ?>
    <body>

        <div class="navbar"><span>Real-Time Chart with Plotly.js</span></div>
        <div class="wrapper">

            <div id="chart"></div>

            <script>
                var data = 0;
                function getData() {
                    
                    var request = new XMLHttpRequest();
                    request.open('GET', 'ambildata', true);
                    request.onload = function () {
                      data = JSON.parse(this.response);
                      console.log(data);
                  }
                  request.send();
                  return data;
              }

              Plotly.plot('chart',[{
                y:[getData()],
                type:'line'
            }]);

              var cnt = 0;
              setInterval(function(){
                Plotly.extendTraces('chart',{ y:[[getData()]]}, [0]);
                cnt++;
                if(cnt > 50) {
                    Plotly.relayout('chart',{
                        xaxis: {
                            range: [cnt-50,cnt]
                        }
                    });
                }
            },500);
        </script>
    </div>
</body>
</html>