<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task View CI 3</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container mt-4">
            <h2>Ria Kusmara</h2>
            <h6>Front End Developer Intern</h6>
        </div>
    </section>
    <section>
        <div class="container text-xl align-items-center mt-4">
             
             <div class="card">
                <div class="card-head d-flex justify-content-center mt-4">
                    <h4 class="text-danger">Daftar Nama Mentor MSIB Batch 5 PT Arkatama Multi Solusindo</h4>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th class="bg-danger text-white">No.</th>
                                <th class="bg-danger text-white">Divisi</th>
                                <th class="bg-danger text-white">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($mentor as $mentor){ ?>
                            <tr>
                                <td class="text-center"><?= $mentor->id?></td>
                                <td class="text-center"><?= $mentor->divisi?></td>
                                <td><?= $mentor->mentor?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
             </div>
        </div>
    </section>
    
</body>
</html>