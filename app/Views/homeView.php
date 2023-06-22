<?= $this->extend('base\main');?>
<?= $this->section('content');?>

<div class="container p-5 bg-warning">
    <div class="row" >
        <div class="col border bg-light  p-3">

            <form action="/" method="post" >
            <input type="hidden" class="form-control" name="id" value="<?= isset($id) ? $id : '' ;?>">

<label for="firstName" class="form-label">First Name</label>    
<input type="text" class="form-control" name="firstName" value="<?= isset($firstName) ? $firstName : '' ;?>">

<label for="lastName" class="form-label">Last name</label>    
<input type="text" class="form-control" name="lastName" value="<?= isset($lastName) ? $lastName : '' ;?>">
<input type="submit"  value="submit" class="btn btn-success mt-2">
            </form>

        </div>

        
        <div class="col">
            <table class="table table-hover table-striped table-bordered table-reponsive table-info">
                <tr>
                    <th>First Name</th>
                    <th>last Name</th>
                    <th>Action</th>
                </tr>
                <?php foreach($rows as $item) :?>
                        <tr>
                            <td><?= $item['firstName']?></td>
                            <td><?= $item['lastName']?></td>
                            <td class="">
                                <a class="mt-1 mb-1 btn btn-primary" href="/home/edit/<?= $item['id']?>">edit</a>
                                <a class="mt-1 mb-1 btn btn-danger" href="/home/delete/<?= $item['id']?>">delete</a>
                            </td>
                        </tr>

                    <?php endforeach?>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection();?>
