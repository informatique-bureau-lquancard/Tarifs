#from unidecode import unidecode

#from ..tests_tarifs.tarifs_HEBDO.test2 import fct
from test2 import fct

#from ..tests_tarifs.tarifs_HEBDO.traitement_MILIMA2 import fct
#from ..tests_tarifs.tarifs_HEBDO.traitement_MILIMA2 import fct

#import tests_tarifs.tarifs_HEBDO.traitement_MILIMA2 as trt

#from var.wwww.html.Tarifs.tests_tarifs.tarifs_HEBDO.test2 import fct

print("Hello Python")

#tarifs_hebdo_profil = ("MILIMA", "ANGWIN_HEBDO", "CUVFAU", "MAISOB")
tarifs_hebdo_profil = ["MILIMA"]

#tarifs_hebdo_chemin = ("MILLESIMA", "ANGWIN_HEBDO", "CUVFAU", "MAISOB")

tarifs_hebdo_chemin = ["MILLESIMA"]

# php a enlevé
chemin_fichiers_php = "/var/www/html/php/"

for profil in tarifs_hebdo_profil:

    print(profil + " " + profil)

    #chemin_traitement = unidecode(chemin_fichiers_php + tarifs_hebdo_chemin[key] + "/")

    #print (chemin_traitement + "traitement_" + profil + ".py")

    print ("   ")

    # Execution du script python adequate au profil du tarif.

    #script_tarif = exec(open(chemin_traitement + "traitement_" + profil + ".py").read())

#/Volumes/Intranet/Tarifs/batchs/sortie_MILIMA.csv

    script_tarif = fct("http://admin.millesima.fr/media/productsfeedpick/fr.xml", '/var/www/html/Tarifs/tarifs_HEBDO/sortie_'+profil+'.csv')

    #print (script_tarif.__str__)

    print ("   ")

    #chemin_fichier_sortie = unidecode(chemin_fichiers_php + "tarifs_HEBDO/")

    #print (chemin_fichier_sortie + "sortie_" + profil + ".xlsx")
    
    #print ("   ")

    #file_OUT = exec(open(chemin_fichier_sortie + "sortie_" + profil + ".xlsx").read())
