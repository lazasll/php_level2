<?php

 //Что он выведет на каждом шаге? Почему?

class A {
    public function foo() {
    static $x = 0;
    echo ++$x;
    }
    }
    $a1 = new A();
    $a2 = new A();
    $a1->foo();// 1
    $a2->foo();// 2
    $a1->foo();// 3
    $a2->foo();// 4

    //данный вывод обусловлен наличием префиксного инкремента,увеличивает $х на единицу, затем возвращает значение $х.
   
    //Объясните результаты в этом случае.
    class A {
        public function foo() {
        static $x = 0;
        echo ++$x;
        }
        }
        class B extends A {
        }
        $a1 = new A();
        $b1 = new B();
        $a1->foo();// 1 
        $b1->foo();// 1 
        $a1->foo();// 2
        $b1->foo();// 2

        //к каждому классу обращались 2 раза. Класс В является наследником класса А

        //Что он выведет на каждом шаге? Почему?
        class A {
            public function foo() {
            static $x = 0;
            echo ++$x;
            }
            }
            class B extends A {
            }
            $a1 = new A;
            $b1 = new B;
            $a1->foo(); // 1
            $b1->foo(); // 1
            $a1->foo(); // 2
            $b1->foo(); // 2

             //в данном коде я не увидела отличий от предыдущего задания