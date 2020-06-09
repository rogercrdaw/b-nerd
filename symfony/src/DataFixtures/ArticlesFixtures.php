<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


use App\Entity\User;
use App\Entity\Article;
use App\Entity\Categoria;

use \Datetime;

class ArticlesFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {

        //Creem un usuari amb role admin, per afegir alguns articles de prova
        $admin = new User();
        $admin->setEmail('admin@admin.com')
            ->setNom('Admin')->setCognom('Admin')
            ->setNomUsuari('aleixMaki')->setDataRegistre(new \Datetime())
            ->setPassword($this->passwordEncoder->encodePassword($admin, "admin"))
            ->setImatge('perfil_random_03.png')
            ->setDescripcio('
<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>
<p>Tortor condimentum lacinia quis vel eros donec ac odio. Varius quam quisque id diam vel quam elementum pulvinar etiam. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Id semper risus in hendrerit. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa. Fermentum posuere urna nec tincidunt praesent.</p>
            ')
            ->setGithub('random')
            ->setLinkedin('random');
        $roles = ["ROLE_ADMIN"];
        $admin->setRoles($roles);
        $manager->persist($admin);

        $user1 = new User();
        $user1->setEmail('user1@user.com')
            ->setNom('User')->setCognom('Uname')
            ->setNomUsuari('usuario')->setDataRegistre(new \Datetime())
            ->setPassword($this->passwordEncoder->encodePassword($user1, "userValidated"))
            ->setImatge('perfil_random_01.png')
            ->setDescripcio('
<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et ltricies tristique nulla.</p>
<p>Tortor condimentum lacinia quis vel eros donec ac odio. Varius quam quisque id diam vel quam elementum pulvinar etiam. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Id semper risus in hendrerit. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa. Fermentum posuere urna nec tincidunt praesent.</p>
            ')
            ->setGithub('yoquese')
            ->setLinkedin('miLinkedin');
        $roles = ["ROLE_VALIDATED"];
        $user1->setRoles($roles);
        $manager->persist($user1);





        //Creem algunes categories predefinides per anar provant
        $categoria_html = new Categoria();
        $categoria_html->setNom('HTML')
            ->setTipus('frontend')
            ->setLogo('html-logo.png');
        $manager->persist($categoria_html);

        $categoria_css = new Categoria();
        $categoria_css->setNom('CSS')
            ->setTipus('frontend')
            ->setColor('royalblue')
            ->setLogo('css-logo.png');

        $manager->persist($categoria_css);

        $categoria_bootstrap = new Categoria();
        $categoria_bootstrap->setNom('Bootstrap')
            ->setTipus('frontend')
            ->setColor('purple')
            ->setLogo('bootstrap_logo.png');
        $manager->persist($categoria_bootstrap);

        $categoria_js = new Categoria();
        $categoria_js->setNom('JS')
            ->setTipus('frontend')
            ->setColor('gold')
            ->setLogo('js-logo.png');
        $manager->persist($categoria_js);

        $categoria_vue = new Categoria();
        $categoria_vue->setNom('VUE')
            ->setTipus('frontend')
            ->setColor('mediumseagreen')
            ->setLogo('vue_logo.png');
        $manager->persist($categoria_vue);



        $categoria_mongo = new Categoria();
        $categoria_mongo->setNom('MongoDB')
            ->setTipus('backend')
            ->setLogo('mongodb-logo.png');
        $manager->persist($categoria_mongo);

        $categoria_php = new Categoria();
        $categoria_php->setNom('PHP')
            ->setTipus('backend')
            ->setColor('#9966ff')
            ->setLogo('php-logo.png');
        $manager->persist($categoria_php);

        $categoria_symfony = new Categoria();
        $categoria_symfony->setNom('Symfony')
            ->setTipus('backend')
            ->setLogo('symfony-logo.png');
        $manager->persist($categoria_symfony);

        //Sistemes
        $categoria_node = new Categoria();
        $categoria_node->setNom('Node')
            ->setTipus('sistemes')
            ->setLogo('nodejs_logo_1.png');
        $manager->persist($categoria_node);

        $categoria_apache = new Categoria();
        $categoria_apache->setNom('Apache')
            ->setTipus('sistemes')
            ->setLogo('apache-logo.png');
        $manager->persist($categoria_apache);

        $categoria_nginx = new Categoria();
        $categoria_nginx->setNom('NGINX')
            ->setTipus('sistemes')
            ->setLogo('nginx-logo.png');
        $manager->persist($categoria_nginx);

        //Array per ala transformació de titols a SLUG
        $unwanted_array = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                                'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                                'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                                'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                                'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'l·l'=>'l' );

        //Creem alguns articles lorem ipsum de prova per poder treballar amb el frontend

        //ARTICLE
        $titol_php1 = "Funciones PHP para validar formularios";

        $article_php1 = new Article();
        $article_php1->setTitol($titol_php1)
            ->setResum('Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eaque ipsa, praesentium officia illo dignissimos aperiam ex.')
            ->setDataPublicacio(new \Datetime())
            ->setSlug(str_replace(" ", "-", strtolower($titol_php1)))
            ->setAutor($admin)
            ->addCategories($categoria_php)
            ->addCategories($categoria_symfony)

            ->setMetaTag('php,form,htmlentities')
            ->setContingut('
<p>Meetus dictum at tempor commodo. Sapien et ligula ullamcorper malesuada proin libero nunc. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Risus nec feugiat in fermentum. Pulvinar sapien et ligula ullamcorper malesuada proin. Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Tortor condimentum lacinia quis vel eros donec ac odio. Varius quam quisque id diam vel quam elementum pulvinar etiam. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Id semper risus in hendrerit.</p>          
<p>Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>           
<pre><code class="language-php hljs">
$result = $serializer-&gt;normalize($level1, null, [
AbstractObjectNormalizer::ENABLE_MAX_DEPTH =&gt; true
]);
</code></pre> 
 
<p>Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa. Fermentum posuere urna nec tincidunt praesent.</p>
<pre><code class="language-php hljs">
$postJson = $serializer-&gt;serialize($post, &#39;json&#39;, [
    &#39;circular_reference_handler&#39; =&gt; function ($object) {
    return $object-&gt;getId();aaa
    }
]);
</code></pre> 
 
<p>Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Sit amet volutpat consequat mauris nunc congue. Dis parturient montes nascetur ridiculus mus mauris vitae. Magna fermentum iaculis eu non diam phasellus vestibulum.</p>            
            ')
            ->setVisible(true);
        $manager->persist($article_php1);

        //ARTICLE 2
        $titol_php2 = "Model Vista Controlador (MVC) amb PHP";
        $article_php2 = new Article();
        $article_php2->setTitol($titol_php2)
            ->setResum("Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa.")
            ->setDataPublicacio(new \Datetime())
            ->setSlug(strtr(str_replace(" ", "-", strtolower($titol_php2)), $unwanted_array))
            ->setAutor($admin)
            ->addCategories($categoria_php)
            ->setMetaTag('mvc,php,modelo,vista,controlador')
            ->setContingut('
<p>Metus dictum at tempor commodo. Sapien et ligula ullamcorper malesuada proin libero nunc. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Risus nec feugiat in fermentum. Pulvinar sapien et ligula ullamcorper malesuada proin. Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Tortor condimentum lacinia quis vel eros donec ac odio. Varius quam quisque id diam vel quam elementum pulvinar etiam. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Id semper risus in hendrerit. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa. Fermentum posuere urna nec tincidunt praesent.</p>
<ul>
    <li>Elementum pulvinar etiam</li>
    <li>non quam lacus suspendisse faucibus interdum posuere.</li>
    <li>Urna et pharetra pharetra massa massa.</li>
    <li>Fermentum posuere urna nec tincidunt praesent.</li>
</ul>
<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>
<pre><code class="language-php hljs">
$result = $serializer-&gt;normalize($level1, null, [
    AbstractObjectNormalizer::ENABLE_MAX_DEPTH =&gt; true
]);
</code></pre> 
<p>Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Sit amet volutpat consequat mauris nunc congue. Dis parturient montes nascetur ridiculus mus mauris vitae. Magna fermentum iaculis eu non diam phasellus vestibulum.</p>
            ')
            ->setVisible(true);
        $manager->persist($article_php2);

        //ARTICLE
        $titol_apa1 = "Instalacio Apache";
        $article_apa1 = new Article();
        $article_apa1->setTitol($titol_apa1)
            ->setResum("Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa.")
            ->setDataPublicacio(new \Datetime())
            ->setSlug(strtr(str_replace(" ", "-", strtolower($titol_apa1)), $unwanted_array))
            ->setAutor($admin)
            ->addCategories($categoria_apache)
            ->setMetaTag('servidor,apache, localhost')
            ->setContingut('
<p>Metus dictum at tempor commodo. Sapien et ligula ullamcorper malesuada proin libero nunc. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Risus nec feugiat in fermentum. Pulvinar sapien et ligula ullamcorper malesuada proin. Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Tortor condimentum lacinia quis vel eros donec ac odio. Varius quam quisque id diam vel quam elementum pulvinar etiam. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Id semper risus in hendrerit. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa. Fermentum posuere urna nec tincidunt praesent.</p>
<ul>
    <li>Elementum pulvinar etiam</li>
    <li>non quam lacus suspendisse faucibus interdum posuere.</li>
    <li>Urna et pharetra pharetra massa massa.</li>
    <li>Fermentum posuere urna nec tincidunt praesent.</li>
</ul>
<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>
<pre><code class="language-php hljs">
$result = $serializer-&gt;normalize($level1, null, [
    AbstractObjectNormalizer::ENABLE_MAX_DEPTH =&gt; true
]);
</code></pre>
<ul>
    <li>Elementum pulvinar etiam</li>
    <li>non quam lacus suspendisse faucibus interdum posuere.</li>
    <li>Urna et pharetra pharetra massa massa.</li>
    <li>Fermentum posuere urna nec tincidunt praesent.</li>
</ul>
<p>Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Sit amet volutpat consequat mauris nunc congue. Dis parturient montes nascetur ridiculus mus mauris vitae. Magna fermentum iaculis eu non diam phasellus vestibulum.</p>
            ')
            ->setVisible(true);
        $manager->persist($article_apa1);

        //ARTICLE
        $titol_nginx1 = "Algo de JS";
        $article_nginx1 = new Article();
        $article_nginx1->setTitol($titol_nginx1)
            ->setResum("Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa.")
            ->setDataPublicacio(new \Datetime())
            ->setSlug(strtr(str_replace(" ", "-", strtolower($titol_nginx1)), $unwanted_array))
            ->setAutor($admin)
            ->addCategories($categoria_js)
            ->addCategories($categoria_css)
            ->setMetaTag('servidor,nginx,localhost')
            ->setContingut('
<p>Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Risus nec feugiat in fermentum. Pulvinar sapien et ligula ullamcorper malesuada proin. Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Tortor condimentum lacinia quis vel eros donec ac odio. Varius quam quisque id diam vel quam elementum pulvinar etiam. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Id semper risus in hendrerit. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa. Fermentum posuere urna nec tincidunt praesent.</p>
<ol>
    <li>Elementum pulvinar etiam</li>
    <li>non quam lacus suspendisse faucibus interdum posuere.</li>

</ol>
<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>
<pre><code class="language-php hljs">
$result = $serializer-&gt;normalize($level1, null, [
    AbstractObjectNormalizer::ENABLE_MAX_DEPTH =&gt; true
]);
</code></pre> 
<p>Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Sit amet volutpat consequat mauris nunc congue. Dis parturient montes nascetur ridiculus mus mauris vitae. Magna fermentum iaculis eu non diam phasellus vestibulum.</p>
           ')
            ->setVisible(true);
        $manager->persist($article_nginx1);

        //ARTICLE
        $titol_sql1 = "funcions de geolocalitzacio amb JS";
        $article_sql1 = new Article();
        $article_sql1->setTitol($titol_sql1)
            ->setResum("Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa.")
            ->setDataPublicacio(new \Datetime())
            ->setSlug(strtr(str_replace(" ", "-", strtolower($titol_sql1)), $unwanted_array))
            ->setAutor($admin)
            ->addCategories($categoria_js)
            ->addCategories($categoria_css)
            ->setMetaTag('bbdd,sql,')
            ->setContingut('
<p>Risus nec feugiat in fermentum. Pulvinar sapien et ligula ullamcorper malesuada proin. Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Tortor condimentum lacinia quis vel eros donec ac odio. Varius quam quisque id diam vel quam elementum pulvinar etiam. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Id semper risus in hendrerit.</p>
<p>Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa. Fermentum posuere urna nec tincidunt praesent.</p>

<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>
<pre><code class="language-php hljs">
$result = $serializer-&gt;normalize($level1, null, [
    AbstractObjectNormalizer::ENABLE_MAX_DEPTH =&gt; true
]);
</code></pre> 

<p>Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Sit amet volutpat consequat mauris nunc congue. Dis parturient montes nascetur ridiculus mus mauris vitae. Magna fermentum iaculis eu non diam phasellus vestibulum.</p>
            ')
            ->setVisible(true);
        $manager->persist($article_sql1);

        //ARTICLE
        $titol_mongo = "Configuracio MongoDB";
        $article_mongo1 = new Article();
        $article_mongo1->setTitol($titol_mongo)
            ->setResum("Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa.")
            ->setDataPublicacio(new \Datetime())
            ->setSlug(strtr(str_replace(" ", "-", strtolower($titol_mongo)), $unwanted_array))
            ->setAutor($user1)
            ->addCategories($categoria_mongo)
            ->setMetaTag('servidor,nginx,localhost')
            ->setContingut('

<p>Tortor condimentum lacinia quis vel eros donec ac odio. Varius quam quisque id diam vel quam elementum pulvinar etiam. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Id semper risus in hendrerit. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa. Fermentum posuere urna nec tincidunt praesent.</p>
<p>Metus dictum at tempor commodo. Sapien et ligula ullamcorper malesuada proin libero nunc. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Risus nec feugiat in fermentum. Pulvinar sapien et ligula ullamcorper malesuada proin. Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>
<p>Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Sit amet volutpat consequat mauris nunc congue. Dis parturient montes nascetur ridiculus mus mauris vitae. Magna fermentum iaculis eu non diam phasellus vestibulum.</p>
            ')
            ->setVisible(false);
        $manager->persist($article_mongo1);

       

        //ARTICLE 
        $titol_java1 = "VUE contra API";
        $article_java1 = new Article();
        $article_java1->setTitol($titol_java1)
            ->setResum("Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa.")
            ->setDataPublicacio(new \Datetime())
            ->setSlug(strtr(str_replace(" ", "-", strtolower($titol_java1)), $unwanted_array))
            ->setAutor($admin)
            ->addCategories($categoria_vue)
            ->addCategories($categoria_js)
            ->setMetaTag('servidor,nginx,localhost')
            ->setContingut('<
p> Varius quam quisque id diam vel quam elementum pulvinar etiam. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Id semper risus in hendrerit. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa. Fermentum posuere urna nec tincidunt praesent.</p>

<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>
<pre><code class="language-php hljs">
$result = $serializer-&gt;normalize($level1, null, [
    AbstractObjectNormalizer::ENABLE_MAX_DEPTH =&gt; true
]);
</code></pre> 
</p>Sapien et ligula ullamcorper malesuada proin libero nunc. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Risus nec feugiat in fermentum. Pulvinar sapien et ligula ullamcorper malesuada proin. Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>
<pre><code class="language-php hljs">
$result = $serializer-&gt;normalize($level1, null, [
    AbstractObjectNormalizer::ENABLE_MAX_DEPTH =&gt; true
]);
</code></pre> 

<p>Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Sit amet volutpat consequat mauris nunc congue. Dis parturient montes nascetur ridiculus mus mauris vitae. Magna fermentum iaculis eu non diam phasellus vestibulum.</p>
            ')
            ->setVisible(true);
        $manager->persist($article_java1);


        //ARTICLE
        $titol_html1 = "Algo de HTML";
        $article_htm1 = new Article();
        $article_htm1->setTitol($titol_html1)
            ->setResum("Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Urna et pharetra pharetra massa massa.")
            ->setDataPublicacio(new \Datetime())
            ->setSlug(strtr(str_replace(" ", "-", strtolower($titol_html1)), $unwanted_array))
            ->setAutor($admin)
            ->addCategories($categoria_html)
            ->addCategories($categoria_css)
            ->setMetaTag('servidor,nginx,localhost')
            ->setContingut('
<p>Metus dictum at tempor commodo. Sapien et ligula ullamcorper malesuada proin libero nunc. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Risus nec feugiat in fermentum. Pulvinar sapien et ligula ullamcorper malesuada proin. Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.</p>
<pre><code class="language-php hljs">
$result = $serializer-&gt;normalize($level1, null, [
    AbstractObjectNormalizer::ENABLE_MAX_DEPTH =&gt; true
]);
</code></pre> 

<ul>
    <li>Elementum pulvinar etiam</li>
    <li>non quam lacus suspendisse faucibus interdum posuere.</li>
    <li>Urna et pharetra pharetra massa massa.</li>
    <li>Fermentum posuere urna nec tincidunt praesent.</li>
</ul>
<p>Mi eget mauris pharetra et ultrices neque ornare. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Aliquet porttitor lacus luctus accumsan tortor posuere. Morbi tristique senectus et netus et malesuada fames ac.Vulputate dignissim suspendisse in est ante in nibh. Enim ut sem viverra aliquet eget sit amet tellus cras. Mattis molestie a iaculis at erat pellentesque adipiscing. Sed risus ultricies tristique nulla.</p>
            ')
            ->setVisible(true);
        $manager->persist($article_htm1);

        //Persisit DATA
        $manager->flush();
    }
}
