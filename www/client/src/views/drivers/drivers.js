import React from 'react'
import {
    CCard,
    CCardBody,
    CCardHeader, CCardImage, CCardText,
    CCol,
    CRow,
    CTable,
    CTableBody,
    CTableCaption,
    CTableDataCell,
    CTableHead,
    CTableHeaderCell,
    CTableRow,
} from '@coreui/react'
import { DocsExample } from 'src/components'

const Drivers = () => {
  return (
    <CRow>
        <CCol xs={12}>
            <CCard className="mb-4">
                <CCardHeader>
                    <strong>Водителя</strong>
                </CCardHeader>
                <CCardBody>
                    <CRow>
                        <CCol sm={12}>
                            <CCol sm={3}><CCard style={{ width: '18rem' }}>
                                <CCardImage orientation="top" src="/images/react.jpg" />
                                <CCardBody>
                                    <CCardText>
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </CCardText>
                                </CCardBody>
                            </CCard></CCol>
                            <CCol sm={3}><CCard style={{ width: '18rem' }}>
                                <CCardImage orientation="top" src="/images/react.jpg" />
                                <CCardBody>
                                    <CCardText>
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </CCardText>
                                </CCardBody>
                            </CCard></CCol>
                            <CCol sm={3}><CCard style={{ width: '18rem' }}>
                                <CCardImage orientation="top" src="/images/react.jpg" />
                                <CCardBody>
                                    <CCardText>
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </CCardText>
                                </CCardBody>
                            </CCard></CCol>
                        </CCol>
                    </CRow>
                </CCardBody>
            </CCard>

        </CCol>
    </CRow>
  )
}

export default Drivers
