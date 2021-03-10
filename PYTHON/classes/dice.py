from random import randint

class Dice:
    """
    Création d'une classe qui gère un objet "Dé"
    """

    def __init__(self, nb_face = 6):
        """
        Constructeur de la classe. Le constructeur est une méthode
        qui est automatiqument déclenchée lors de la création
        d'un objet

        Le paramètre "nb_face" est mis à "6" par défaut, et il peut
        être modifié lors de la création d'un objet en passant un
        nombre entre les parenthèses (par exemple : Dices(7) )
        """

        # Définition d'un attribut "nb_face"
        self.nb_face = nb_face

        # définition d'un attribut protégé
        # 1 underscore au début du nom
        self._protected_attribute = None

        # définition d'un attribut privé
        # 2 underscores au début du nom
        self.__private_attribute = None

        # Définition d'un attribut "current_value" prennant pour
        # valeur par défaut "0".
        self.current_value = 0

    def roll(self):
        """
        Méthode permettant de lancer le dé. Elle définit la valeur
        courante du dé (self.current_value) à un nouveau nombre 
        aléatoire entre 1 et nb_face
        """
        self.current_value = randint(1, self.nb_face)

    def pick_a_number(self, choosen_number):
        """
        Méthode permettant de définir une valeur courante pour le dé
        """
        self.current_value = choosen_number

    def __add__(self, other):
        """
        Méthode spéciale permettant à python de savoir additionner
        2 objets de type "Dice"
        """
        return self.current_value + other.current_value

    def __eq__(self, other):
        """
        Méthode spéciale permettant à python de pouvoir comparer
        2 objets de type "Dice" avec le symbole " == "
        """
        return self.current_value == other.current_value

    def __repr__(self):
        """
        Méthode spéciale permettant de faire un print sur l'objet
        et d'afficher le contenu souhaité
        """
        return f"le dé à {self.nb_face} faces et à pour valeur : {self.current_value}"

# La condition ci-dessous permet de n'exécuter un code QUE lorsque
# le fichier python est exécuté directement.
# Si vous instanciez ce fichier en exécutant la commande "python dice.py"
# alors ce qui est dedans s'exécutera.
# Par contre si ce fichier est appelé dans un autre (par exemple dans 
# dices.py), alors le contenu de ce bloc "if" ne sera pas exécuté.
if __name__ == "__main__":
    dice1 = Dice()
    dice2 = Dice()

    print(dice1 == dice2)
    print(dice1)

    