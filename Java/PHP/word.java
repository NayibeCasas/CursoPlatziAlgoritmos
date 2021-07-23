//Exercise for get a piece of word

class word{
    public static void pieceWord(String text, int start, int end){
        System.out.println(text.substring(start,end));
    }

    public static void main (String[] args){
        String text="Lasfloresazules";
        pieceWord(text,3,7);
    }
}