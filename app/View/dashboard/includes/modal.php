<div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form inside the modal -->
                <form method="post" action="./user/addWikis">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">contenue</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">categorie</label>
                        <select id="category" name="cat" required>
                            <?php foreach ($cate as $cat):?>
                                <option value="<?=$cat->id?>"><?=$cat->name?></option>
                            <?php endforeach; ?>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="ajouterWiki">ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
