<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $produtos = [
            ['titulo' => 'Smartphone Samsung Galaxy S21', 'categoria_id' => 1, 'imgLink' => 'https://i.zst.com.br/thumbs/12/2a/32/-731222761.jpg', 'price' => 999.99, 'descricao' => 'Produto da categoria Eletrônicos com alta qualidade e ótima avaliação.'],
            ['titulo' => 'Fone de ouvido Bluetooth Sony', 'categoria_id' => 1, 'imgLink' => 'https://m.media-amazon.com/images/I/61oqO1AMbdL.jpg', 'price' => 199.90, 'descricao' => 'Fone de ouvido sem fio com tecnologia Bluetooth, som nítido, graves potentes e bateria de longa duração.'],
            ['titulo' => 'Smart TV 55" 4K LG', 'categoria_id' => 1, 'imgLink' => 'https://www.lg.com/content/dam/channel/wcms/br/images/tv/55un7310psc_awz_essp_br_c/gallery/D1.jpg', 'price' => 2599.00, 'descricao' => 'Smart TV LG de 55" com resolução 4K UHD, HDR, sistema webOS e integração com Alexa e Google Assistente.'],
            ['titulo' => 'Caixa de som JBL portátil', 'categoria_id' => 1, 'imgLink' => 'https://m.media-amazon.com/images/I/71HdLDJEEUL.jpg', 'price' => 349.50, 'descricao' => 'Caixa de som Bluetooth com som potente, design compacto, resistente à água e bateria de até 12 horas.'],
            ['titulo' => 'Câmera digital Canon EOS', 'categoria_id' => '1', 'imgLink' => 'https://m.media-amazon.com/images/I/91-EQz3tYFL.jpg', 'price' => 1799.75, 'descricao' => 'Câmera DSLR ideal para fotos e vídeos profissionais, sensor de alta resolução e lentes intercambiáveis.'],

            ['titulo' => 'Notebook Dell Inspiron 15', 'categoria_id' => 2, 'imgLink' => 'https://m.media-amazon.com/images/I/71epkJC5SxL._AC_SX569_.jpg', 'price' => 3200.99, 'descricao' => 'Notebook com tela de 15.6", ideal para estudos e produtividade. Equipado com processador Intel e armazenamento rápido SSD.'],
            ['titulo' => 'Monitor LED 24" Samsung', 'categoria_id' => 2, 'imgLink' => 'https://m.media-amazon.com/images/I/510mTWzS4lL._AC_SX569_.jpg', 'price' => 799.00, 'descricao' => 'Monitor Full HD de 24 polegadas com painel LED, excelente para home office, estudos e entretenimento com cores vivas.'],
            ['titulo' => 'Mouse gamer Logitech', 'categoria_id' => 2, 'imgLink' => 'https://m.media-amazon.com/images/I/61oE1NouXuL._AC_SX569_.jpg', 'price' => 259.90, 'descricao' => 'Mouse gamer ergonômico com alta precisão, botões programáveis e iluminação RGB. Perfeito para jogadores exigentes.'],
            ['titulo' => 'Teclado mecânico Razer', 'categoria_id' => 2, 'imgLink' => 'https://m.media-amazon.com/images/I/519rEOUYUoL._AC_SX569_.jpg', 'price' => 499.99, 'descricao' => 'Teclado mecânico com switches de alto desempenho, ideal para digitação rápida e jogos. Construção robusta com iluminação personalizável.'],
            ['titulo' => 'SSD 500GB Samsung Evo', 'categoria_id' => 2, 'imgLink' => 'https://m.media-amazon.com/images/I/911ujeCkGfL._AC_SX569_.jpg', 'price' => 699.90, 'descricao' => 'SSD de 500GB com tecnologia Samsung Evo, garantindo alta velocidade de leitura e gravação para melhorar o desempenho do seu sistema.'],

            ['titulo' => 'Conjunto de panelas Tramontina', 'categoria_id' => 3, 'imgLink' => 'https://m.media-amazon.com/images/I/71yG1BEwZ+L._AC_SX679_.jpg', 'price' => 399.90, 'descricao' => 'Conjunto de panelas antiaderentes com cabos anatômicos, ideal para o preparo de refeições práticas e saudáveis no dia a dia.'],
            ['titulo' => 'Liquidificador Philips Walita', 'categoria_id' => 3, 'imgLink' => 'https://m.media-amazon.com/images/I/613LbadctMS._AC_UL320_.jpg', 'price' => 249.99, 'descricao' => 'Liquidificador potente com lâminas em aço inox, ideal para preparar sucos, vitaminas e massas leves com praticidade.'],
            ['titulo' => 'Jogo de pratos Porto Brasil', 'categoria_id' => 3, 'imgLink' => 'https://m.media-amazon.com/images/I/71RF4dSTZ5L._AC_UL320_.jpg', 'price' => 199.00, 'descricao' => 'Jogo de pratos em cerâmica de alta resistência, com acabamento sofisticado e ideal para compor uma mesa elegante.'],
            ['titulo' => 'Cafeteira Nespresso', 'categoria_id' => 3, 'imgLink' => 'https://m.media-amazon.com/images/I/51asY+kBsQL._AC_UL320_.jpg', 'price' => 799.00, 'descricao' => 'Cafeteira moderna compatível com cápsulas Nespresso, prepara cafés expressos e cremosos em poucos segundos com um toque.'],
            ['titulo' => 'Aspirador de pó Dyson', 'categoria_id' => 3, 'imgLink' => 'https://m.media-amazon.com/images/I/51aRnE8t8dL._AC_UL320_.jpg', 'price' => 1499.99, 'descricao' => 'Aspirador de pó sem fio de alta potência com tecnologia ciclônica, ideal para limpeza profunda de pisos, carpetes e estofados.'],

            ['titulo' => '1984 - George Orwell', 'categoria_id' => 10, 'imgLink' => 'https://m.media-amazon.com/images/I/819js3EQwbL._AC_UL320_.jpg', 'price' => 39.90, 'descricao' => 'Romance distópico que retrata um regime totalitário e vigilante, explorando temas como liberdade, opressão e manipulação da verdade.'],
            ['titulo' => 'Dom Quixote - Cervantes', 'categoria_id' => 10, 'imgLink' => 'https://m.media-amazon.com/images/I/7173OUDvmuL._AC_UL320_.jpg', 'price' => 49.90, 'descricao' => 'Clássico da literatura espanhola que acompanha as aventuras do cavaleiro Dom Quixote e seu fiel escudeiro Sancho Pança.'],
            ['titulo' => 'O Pequeno Príncipe - Saint-Exupéry', 'categoria_id' => 10, 'imgLink' => 'https://m.media-amazon.com/images/I/71LJ4k-k9hL._AC_UL320_.jpg', 'price' => 29.90, 'descricao' => 'Fábula poética e filosófica que aborda temas como amizade, amor e essência da vida por meio dos olhos de um pequeno príncipe viajante.'],
            ['titulo' => 'Sapiens - Yuval Noah Harari', 'categoria_id' => 10, 'imgLink' => 'https://m.media-amazon.com/images/I/81nOTTEtjUL._AC_UL320_.jpg', 'price' => 69.90, 'descricao' => 'Obra de não ficção que analisa a história da humanidade desde os primeiros Homo sapiens até as revoluções científica e tecnológica.'],
            ['titulo' => 'Harry Potter e a Pedra Filosofal', 'categoria_id' => 10, 'imgLink' => 'https://m.media-amazon.com/images/I/71NsVQ5MlwL._AC_UL320_.jpg', 'price' => 59.90, 'descricao' => 'Primeiro volume da famosa saga de fantasia, onde Harry Potter descobre ser um bruxo e embarca em aventuras mágicas em Hogwarts.'],

        ];

        foreach ($produtos as $produto) {
            Product::create($produto);
        }
    }
}
