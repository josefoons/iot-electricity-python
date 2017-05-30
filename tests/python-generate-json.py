#!/usr/bin/python2

from urllib2 import urlopen
import json

url="http://192.168.242.169/json.do?_G_ULN[0],_G_ULN[1],_G_ULN[2],_G_ULL[0],_G_ULL[1],_G_ULL[2],_G_ILN[0],_G_ILN[1],_G_ILN[2],_G_I_SUM3,_G_PLN[0],_G_PLN[1],_G_PLN[2],_G_P_SUM3,_G_SLN[0],_G_SLN[1],_G_SLN[2],_G_S_SUM3,_G_QLN[0],_G_QLN[1],_G_QLN[2],_G_Q_SUM3,_G_COS_PHI[0],_G_COS_PHI[1],_G_COS_PHI[2],_G_FREQ,_G_PHASE_SEQ,_G_WH[0],_G_WH[1],_G_WH[2],_G_WH_SUML13,_G_WH_V[0],_G_WH_V[1],_G_WH_V[2],_G_WH_V_HT_SUML13,_G_WH_Z[0],_G_WH_Z[1],_G_WH_Z[2],_G_WH_Z_SUML13,_G_WH_S[0],_G_WH_S[1],_G_WH_S[2],_G_WH_S_SUML13,_G_QH[0],_G_QH[1],_G_QH[2],_G_QH_SUML13,_G_IQH[0],_G_IQH[1],_G_IQH[2],_G_IQH_SUML13,_G_CQH[0],_G_CQH[1],_G_CQH[2],_G_CQH_SUML13,_G_THD_ULN[0],_G_THD_ULN[1],_G_THD_ULN[2],_G_THD_ILN[0],_G_THD_ILN[1],_G_THD_ILN[2]"


response = urlopen(url)
json_obj = json.load(response)

for i in json_obj[0]:
    print i[0]



print html

