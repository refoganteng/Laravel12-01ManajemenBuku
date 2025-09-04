document.addEventListener('DOMContentLoaded', function () {
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');

    if (nameInput && slugInput) {
        nameInput.addEventListener('input', function () {
            let name = this.value;
            let slug = name.toLowerCase()
                           .replace(/[^a-z0-9\s-]/g, '')   // hapus karakter aneh
                           .trim()
                           .replace(/\s+/g, '-')           // ganti spasi jadi -
                           .replace(/-+/g, '-');           // hapus duplikat '-'

            slugInput.value = slug;
        });
    }
});
