    function getData() {

        $.ajax({
            url:"./php/getData.php",
            type:"get",
            dataType:"json",
            success:function (data) {
                var html = '';
                for(var i = 0; i<data.length; i++){
                    html += '<li>\n' +
                        '            <h3><a href="">'+data[i].title+'</a> <small> 修改</small><small>删除</small></h3>\n' +
                        '            <em>'+data[i].author+'</em>\n' +
                        '            <em>'+data[i].label+'</em>\n' +
                        '            <em>'+data[i].time+'</em>\n' +
                        '            <p>'+data[i].content+'</p>\n' +
                        '        </li>'
                }
                document.getElementById('list').innerHTML = html;
            }
        })
    }
    function addData() {
        $.ajax({
            url:"./php/addData.php",
            type:"post",
            data:{},
            dataType:"json",
            success:function (data) {

            }
        })
    }
    function selectData() {
        $.ajax({
            url:"",
            type:"",
            data:{},
            dataType:"",
            success:function (data) {

            }
        })
    }
    function deleteData() {
        $.ajax({
            url:"",
            type:"",
            data:{},
            dataType:"",
            success:function (data) {

            }
        })
    }


