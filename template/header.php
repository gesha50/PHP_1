

            <div class="header">
                <a href="index.php" class="b-header__link"><span class="b-header__span">Главная</span></a>
                <a href="catalog.php" class="b-header__link"><span class="b-header__span">Каталог</span></a>
                <a href="responses.php" class="b-header__link"><span class="b-header__span">Отзывы</span></a>
                <a href="#" class="b-header__link"><span class="b-header__span">Фотогалерея</span></a>
                <a href="cart.php" class="b-header__link cart"><span class="b-header__span">Корзина</span></a>
                <?php if(isset($_SESSION['login']) && isset($_SESSION['pass'])):?>
                    <a href='login.php?action=profile' class="b-header__link cart" ><span class="b-header__span" >Личный кабинет</span></a>
                    <a href='login.php?action=logout' class="b-header__link cart" ><span class="b-header__span" >Выйти <?= $_SESSION['login']?></span> </a>
                <?php else:?>
                    <a href='login.php' class="b-header__link cart" ><span class="b-header__span" >Войти</span></a>
                    <a href='reg.php' class="b-header__link cart" ><span class="b-header__span" >Регистрация</span></a>
                <?php endif;?>
                <?php if(isset($_SESSION['login']) && isset($_SESSION['pass']) && $_SESSION['login'] == 'admin'):?>
                    <a href="../admin/" class="b-header__link cart" ><span class="b-header__span" >Админка</span></a>
                <?php endif;?>
            </div>



        

