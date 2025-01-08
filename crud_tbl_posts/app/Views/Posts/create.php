<h1>Tambah Post</h1>
<form action="/posts/store" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="slug" placeholder="Slug">
    <input type="number" name="user_id" placeholder="User ID">
    <textarea name="content" placeholder="Content"></textarea>
    <input type="text" name="image" placeholder="Image">
    <select name="aktif">
        <option value="Y">Aktif</option>
        <option value="N">Tidak Aktif</option>
    </select>
    <select name="status">
        <option value="publish">Publish</option>
        <option value="draft">Draft</option>
    </select>
    <button type="submit">Simpan</button>
</form>
