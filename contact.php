<?php include_once 'header.php' ?>
<script src="Css/bootstrap.min.js"></script>
<script src="Css/jquery-3.4.1.min.js"></script>
<body>
    <div class="container h-100 bg-warning">
        <div class="border border-danger rounded">
            <div class="form-group ">
                <label for="email">E-Mail:</label>
                <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="sujet">Sujet:</label>
                <input type="text" class="form-control" id="sujet">
            </div>
            <div class="form-group">
                <label for="comment">Message:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <button type="submit" class="btn">Envoyé</button>
        </div>
    </div>
</body>