@extends('layouts.admin_template')

@section('title')
Title

@endsection

@section('head')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<style>
table{
  overflow:auto;
}
</style>
@endsection

@section('content')

<div class="row">
<div class="col-md-12">
            <div class="card pb-3">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body ">
                <div class="table-responsive ">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          id
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Aadhar
                      </th>
                      <th>
                        Reason
                      </th>
                      <th>
                        From
                      </th>
                      <th>
                        To
                      </th>
                      <th>
                        hash
                      </th>
                      <th>
                        created At
                      </th>
                      <th>
                      Updated at
                      </th>
                      <th class="text-right">
                        Approved
                      </th>
                    </thead>
                    <tbody>
                      
                     
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="card-footer text-center "> 
              <form action="/pass/${id}/approve" method="post">
              
              </form>
              </div>

            </div>
          </div>
        </div>

@endsection

@section('myscripts')
<script type="module">

window.onload=function(){
  populateArray()
   let array=getAllDataInArray();
  //use array as you like
}

async function populateArray()
   {   let data;
      data = await axios.get('https://damp-cove-28523.herokuapp.com/admin/pass').then((response)=>{
          return response.data
      }).catch((err)=>console.log(err))
      
      let tbody=document.querySelector('tbody');

       data.forEach(element => {
           tbody.innerHTML = `
           <tr>
                        <td>
                          ${element.id}
                        </td>
                        <td>
                          ${element.name}
                        </td>
                        <td>
                          ${element.aadhar}
                        </td>
                        <td>
                          ${element.reason}
                        </td>
                        <td>
                        ${element.from}
                        </td>
                        <td>
                        ${element.to}
                        </td>
                        <td>
                        ${element.hash}
                        </td>
                        <td>
                        ${element.created_at}
                        </td>
                        <td>
                        ${element.updated_at}
                        </td>
                        <td class="text-right">
                        ${element.status}
                        </td>
                       <td>
                       <form action="/admin/pass/${element.id}/approve" method="post">
                       @csrf
                       <button class="btn btn-success  mb-2">Approve</button>
                       </form>
                       <form action="/admin/pass/${element.id}/reject" method="post">
                       @csrf
                       <button type="submit" class="btn btn-danger">Reject</button>
                       </form>
                      </td>
                      </tr>
           `     
       });
   }




function getAllDataInArray(){

  let array=[];  
  let obj={}
  
  let oTable = document.querySelector('.table');

//gets rows of table
let rowLength = oTable.rows.length;

//loops through rows    
for (let i = 1; i < rowLength; i++){

  //gets cells of current row  
   let oCells = oTable.rows.item(i).cells;

   //gets amount of cells of current row
   let cellLength = oCells.length;

  // get your cell info here

    obj.id = oCells.item(0).innerHTML;
    obj.name = oCells.item(1).innerHTML
    obj.aadhar=oCells.item(2).innerHTML
    obj.reason = oCells.item(3).innerHTML
    obj.from = oCells.item(4).innerHTML
    obj.to = oCells.item(5).innerHTML
    obj.hash = oCells.item(6).innerHTML
    obj.created_at = oCells.item(7).innerHTML
    obj.updated_at = oCells.item(8).innerHTML
    obj.status = oCells.item(9).innerHTML
  }
  array.push(obj);
  return array;
}

</script>
@endsection