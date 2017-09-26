import java.util.Scanner;

public class ComptarLletres {
    public static void main(String[] args) {
        Scanner lector = new Scanner(System.in);
        String paraula = lector.nextLine();

        int Sumalletres = 0;
        Character LletraActual;

        Character [] arrayVocals = new Character[] {'a','e','i','o','u'};

        for (Character lletra:arrayVocals){

            for (int i = 0; i < paraula.length() ; i++) {
                LletraActual = paraula.charAt(i);
                if (lletra==LletraActual){
                    Sumalletres +=1;
                }
            }

        }

        System.out.println("Hi han " + Sumalletres + " vocals.");
    }


}
//haha
