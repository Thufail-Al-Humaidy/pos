$(document).ready(function() {
      $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#categoryTable tbody tr').filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
      });
    });


// $(document).ready(function () {
//     $('#searchInput').on('input', function () {
//         var query = $(this).val();
//         if (query.length > 0) {
//             $.ajax({
//                 url: 'search_category.php', // URL ke handler search
//                 type: 'GET',
//                 data: { query: query },
//                 success: function (data) {
//                     var categories = JSON.parse(data);
//                     var tableBody = $('#categoryTable tbody');
//                     tableBody.empty(); // Hapus data lama

//                     categories.forEach(function (category) {
//                         tableBody.append(`
//                             <tr>
//                                 <td>
//                                     <div class="custom-checkbox custom-control">
//                                         <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-${category.id}">
//                                         <label for="checkbox-${category.id}" class="custom-control-label">&nbsp;</label>
//                                     </div>
//                                 </td>
//                                 <td>${category.name}</td>
//                                 <td>
//                                     <a href="detail.php?id=${category.id}" class="btn btn-primary">Detail</a>
//                                     <a href="edit.php?id=${category.id}" class="btn btn-success">Edit</a>
//                                     <a href="hapus.php?id=${category.id}" class="btn btn-danger">Hapus</a>
//                                 </td>
//                             </tr>
//                         `);
//                     });
//                 }
//             });
//         } else {
//             location.reload(); // Jika input kosong, muat ulang halaman
//         }
//     });
// });

