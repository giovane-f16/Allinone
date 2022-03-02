# Allinone
## Tema desenvolvido  **Wordpress**
Dinamizado e integrado com a criação de Categorias e Post's. 

O intúito desse tema, é informar aos visitantes as notícias mais recentes de forma ágil.

## Categorias
   Assim que instalado o tema, nele virá as categorias que já estão cadastradas no seu ambiente

## Posts
* Paginação desenvolvida - A cada 5 posts criados em uma categoria, uma nova página será anexada. 
* Os posts mais recentes ficam nas primeiras páginas.
* Cada Post pode ser anexado com uma Thumbnail
* Em cada post é mostrado o título, a data de criação e o resumo.

## Plugins
   O tema foi criado e implementado com o Plugin que capta a cotação do dólar e do euro em tempo real.

1. Para adicioná-lo basta ir no repositório [Plugin_wordpress](https://github.com/giovanef16-sys/Plugin_wordpress)
2. Fazer o download do arquivo e inserir no caminho: */c/xampp/htdocs/wordpress/wp-content/plugins/*
3. Ativar o plugin no painel de controle do WordPress

### Importantes
A tela inicial possui três campos para a exibicão de posts específicos. Assim que baixar aparecerá um erro, dizendo que não foi encontrado o ID do post.

Para alterar o ID já implementado na funcao, basta ir no functions.php e alterar o campo com o ID do seu post.

    $post = get_post("valor_id");
