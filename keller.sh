#!/bin/bash

clear
echo -e "\e[37m           KellerSS Android \e[36mFucking Cheaters\e[37m discord.gg/allianceoficial \e[0m"
echo ""
echo -e "\e[31m                            )       (     (          ("
echo "                        ( /(       )\ )  )\ )       )\ )"
echo "                        )\()) (   (()/( (()/(  (   (()/("
echo "                        |((_)\  )\   /(_)) /(_)) )\   /(_))"
echo "                        |_ ((_)((_) (_))  (_))  ((_) (_))"
echo "                        | |/ / | __|| |   | |   | __|| _ \ "
echo "                        ' <  | _| | |__ | |__ | _| |   / "
echo "                        _|\_\ |___||____||____||___||_|_\ \e[0m"
echo ""
echo -e "\e[36m                    {C} Coded By - KellerSS | Credits for Sheik \e[0m"
echo ""
echo -e "\e[38;5;57m      +--------------------------------------------------------------+"
echo -e "\e[38;5;57m      +                       KellerSS Menu                          +"
echo -e "\e[38;5;57m      +--------------------------------------------------------------+\e[0m"
echo ""
echo -e " \e[33m[0]  Instalar Módulos (Atualizar e instalar módulos)\e[0m"
echo -e " \e[32m[1]  Escanear FreeFire Normal\e[0m"
echo -e " \e[32m[2]  Escanear FreeFire Max\e[0m"
echo -e " \e[31m[S]  Sair\e[0m"
echo ""
echo -e "\e[36m[#] Escolha uma das opções acima:\e[0m"
read -r opcao

case "$opcao" in
    0) echo "Instalando módulos..." ;;
    1) ./escanear.sh ;;  # Executa o outro script
    2) echo "Escaneando FreeFire Max..." ;;
    S|s) echo "Saindo..."; exit ;;
    *) echo "Opção inválida!" ;;
esac
