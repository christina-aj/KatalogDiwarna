// Header Search functionality
if ($('.search-box-outer').length) {
    $('.search-box-outer').on('click', function () {
        openSearch();
    });
}

function openSearch() {
    if (!$('body').hasClass('search-active')) {
        $('body').addClass('search-active');

        // Tampilkan input pencarian, tombol close, dan div untuk saran pencarian
        $('body').append(`
            <div class="search-overlay">
                <div class="search-container">
                    <input type="text" id="search-input" class="form-control" placeholder="Cari...">
                    <button class="close-search">&times;</button>
                </div>
                <div id="search-suggestions" class="suggestions-box"></div>
            </div>
        `);

        // Menampilkan rekomendasi pencarian saat mengetik
        $('#search-input').on('input', function () {
            let searchQuery = $(this).val().toLowerCase();

            if (searchQuery.length > 0) {
                // Contoh rekomendasi dummy, bisa diganti dengan data dari server
                let suggestions = ['Popopol', 'Popomaru', 'Popcorn', 'Popaye', 'Popcat'];

                // Filter saran berdasarkan input pencarian
                let filteredSuggestions = suggestions.filter(function (item) {
                    return item.toLowerCase().includes(searchQuery);
                });

                // Membuat elemen HTML untuk saran
                let suggestionHtml = '<ul>';
                filteredSuggestions.forEach(function (item) {
                    suggestionHtml += '<li>' + item + '</li>';
                });
                suggestionHtml += '</ul>';

                // Menampilkan hasil saran dalam elemen saran pencarian
                $('#search-suggestions').html(suggestionHtml).show();
            } else {
                $('#search-suggestions').hide();
            }
        });
    }
}

// Fungsi tombol close
if ($('.search-box-outer').length) {
    $('.close-search').on('click', function () {
        closeSearch();
    });
}

// Fungsi untuk menutup pencarian
function closeSearch() {
    $('body').removeClass('search-active');
    $('.search-overlay').remove();
}




